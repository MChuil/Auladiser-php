<?php 
    session_start();
    require_once "settings/db.php";

    function conexion(){
        try {
            $conexion = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
            return $conexion;
        } catch (\Throwable $th) {
            echo "Error de conexion. " . $th->getMessage();
            die;
        }
    }

    //Seleccionar TODOS los registros de la tabla
    function selectAll($conect){
        return $conect->query("SELECT * FROM tasks");  //selecciona TODOS los registros de la tabla tasks
    }


    //busqueda filtrada por un campo en especifico
    function searchFor($conect, $field, $value){
        $sql = "SELECT * FROM tasks WHERE $field = '$value'";
        return $conect->query($sql);
    }

    //Insertar nuevo registro
    function insert($conect, $name, $priority, $date, $status){
        $sql = "INSERT INTO tasks (name, priority, date, status) VALUES ('$name', '$priority', '$date', '$status')";
        $response = $conect->query($sql); //true o false
        if($response == true){
            $_SESSION['msj'] = "Datos insertados correctamente...";
        }else{
            $_SESSION['error'] = "No se pudo agregar la información, intente nuevamente...";
        }
    }

    // Pone la tarea como Finalizado
    function update($conect, $id){
        $sql = "UPDATE tasks SET status='Finalizado' WHERE id = $id";
        $response = $conect->query($sql); //true o false
        if($response == true){
            $_SESSION['msj'] = "Tarea finalizada correctamente...";
        }else{
            $_SESSION['error'] = "No se pudo finalizar la tarea, intente nuevamente...";
        }
    }

    //Elimina una tarea(registro) de la tabla
    function delete($conect, $id){
        $sql = "DELETE FROM tasks WHERE id = $id";
        $response = $conect->query($sql); //true o false
        if($response == true){
            $_SESSION['msj'] = "Datos eliminados correctamente...";
        }else{
            $_SESSION['error'] = "No se pudo eliminar la información, intente nuevamente...";
        }
    }

    if(isset($_GET['action'])){ //Si existe la variable GET action
        $action = $_GET['action']; //search, insert, update, delete
        switch ($action) {
            case 'search': //busqueda
                $date = $_POST['date'];
                $priority = $_POST['priority'];
                $status = $_POST['status'];
                $cnx = conexion();
                if(!empty($date)){  //buscar por fecha
                    $query = searchFor($cnx, 'date', $date);
                }else if(!empty($priority)){ //buscar por prioridad
                    $query = searchFor($cnx, 'priority', $priority);
                }else if(!empty($status)){ //buscar por estado
                    $query = searchFor($cnx, 'status', $status);
                }else{
                    $query = selectAll($cnx); //buscar todos
                }
                $miArray = [];
                while($row = mysqli_fetch_array($query)){  //ciclo que lee el resultado de la busqueda
                    array_push($miArray, $row);
                }
                
                $_SESSION['data'] = $miArray;
                header('Location:index.php?action=1');
                break;
            case 'insert':
                if(empty($_POST['name']) || empty($_POST['priority'])){ //si no vienen los datos completos
                    $_SESSION['error'] = "Datos incompletos...";
                    header('Location: index.php');
                    return;
                }
                //pasamos los valores a variables
                $cnx = conexion();
                insert($cnx, $_POST['name'], $_POST['priority'], date('Y-m-d'), 'Pendiente');
                header('Location: index.php');
                break;

            case 'update':
                if(empty($_GET['id'])){
                    header('Location: index.php');
                    return;
                }
                $cnx = conexion();
                update($cnx, $_GET['id']);
                header('Location: index.php');
                break;
            case 'delete':
                if(empty($_GET['id'])){
                    header('Location: index.php');
                    return;
                }
                $cnx = conexion();
                delete($cnx, $_GET['id']);
                header('Location: index.php');
                break;
            default:
                break;
        }
    }else{  //si no hay acción
        //buscar todos
        $cnx = conexion();
        $response = selectAll($cnx);  //seleccionar TODOS
        $miArray = [];
        while($row = mysqli_fetch_array($response)){
            array_push($miArray, $row);
        }
        $_SESSION['data'] = $miArray;
    }