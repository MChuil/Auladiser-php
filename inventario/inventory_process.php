<?php 
    @session_start();
    require_once 'settings/conexion.php';

    if(isset($_GET['action'])){ //Si existe la variable GET action
        $action = $_GET['action'];
        switch ($action){
            case 'insert': //si es insert guardamos
                //TODO: Validar que vengan TODOS los datos

                //recibimos datos
                $code = trim($_POST['code']);
                $description = trim($_POST['description']);
                $stock = trim($_POST['stock']);
                $price = trim($_POST['price']);
                //hacemos conexion
                $conect = conexion();
                //insertamos los datos
                $sql = "INSERT INTO inventory (code, description, stock, price) VALUES ('$code', '$description', $stock, $price)";
                $response = $conect->query($sql); //true o false
                //Mandamos msj dependiendo el resultado
                if($response == true){
                    $_SESSION['msj'] = "Producto creado correctamente";
                }else{
                    $_SESSION['error'] = "No se pudo crear el Producto";
                }
                //redireccionamos
                header('Location: inventory.php');
                break;
            case 'update':
                //TODO: Validar que vengan TODOS los datos
                
                //recibimos datos
                $code = trim($_POST['code']);
                $description = trim($_POST['description']);
                $stock = trim($_POST['stock']);
                $price = trim($_POST['price']);
                $id = $_POST['id'];
                //hacemos conexion
                $conect = conexion();
                //actualizar datos
                $sql = "UPDATE inventory SET code='$code', description= '$description', stock=$stock, price=$price WHERE id = $id";
                $response = $conect->query($sql); //true o false
                if($response == true){
                    $_SESSION['msj'] = "Producto actulizado correctamente...";
                }else{
                    $_SESSION['error'] = "No se pudo actualizar los datos del producto, intente nuevamente...";
                }
                header('Location: inventory.php');
                break;
            case 'delete':
                 //TODO: Validar que vengan TODOS los datos

                //recibimos datos
                $id =$_POST['id'];
                
                //hacemos conexion
                $conect = conexion();
                $sql = "DELETE FROM inventory WHERE id = $id";
                $response = $conect->query($sql); //true o false
                if($response == true){
                    $_SESSION['msj'] = "Producto eliminado correctamente...";
                }else{
                    $_SESSION['error'] = "No se pudo eliminar el producto, intente nuevamente...";
                }
                header('Location: inventory.php');
                break;
            // case '':
            //     break;
        }

    }

    function selectAll(){
        $conect = conexion();
        return $conect->query("SELECT * FROM inventory");
    }

    function selectById($id){
        $conect = conexion();
        return $conect->query("SELECT * FROM inventory WHERE id = $id LIMIT 1");
    }

    