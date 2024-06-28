<?php 
    @session_start();
    require_once 'settings/conexion.php';

    if(isset($_GET['action'])){ //Si existe la variable GET action
        $action = $_GET['action'];
        switch ($action){
            case 'insert': //si es insert guardamos
                //TODO: Validar que vengan TODOS los datos

                //recibimos datos
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);
                $rol = $_POST['rol'];

                //encriptar la contraseña
                $password = password_hash($password, PASSWORD_DEFAULT);
                //hacemos conexion
                $conect = conexion();
                //insertamos los datos
                $sql = "INSERT INTO users (name, email, password, rol) VALUES ('$name', '$email', '$password', '$rol')";
                $response = $conect->query($sql); //true o false
                //Mandamos msj dependiendo el resultado
                if($response == true){
                    $_SESSION['msj'] = "Usuario creado correctamente";
                }else{
                    $_SESSION['error'] = "No se pudo crear el Usuario";
                }
                //redireccionamos
                header('Location: users.php');
                break;
            case 'update':
                //TODO: Validar que vengan TODOS los datos
                //recibimos datos
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $rol = $_POST['rol'];
                $id = $_POST['id'];
                //hacemos conexion
                $conect = conexion();
                //actualizar datos
                $sql = "UPDATE users SET name='$name', email= '$email', rol='$rol' WHERE id = $id";
                $response = $conect->query($sql); //true o false
                if($response == true){
                    $_SESSION['msj'] = "Usuario actulizado correctamente...";
                }else{
                    $_SESSION['error'] = "No se pudo actualizar los datos del usuario, intente nuevamente...";
                }
                header('Location: users.php');
                break;
            case 'delete':
                 //TODO: Validar que vengan TODOS los datos

                //recibimos datos
                $id =$_POST['id'];
                
                //hacemos conexion
                $conect = conexion();
                $sql = "DELETE FROM users WHERE id = $id";
                $response = $conect->query($sql); //true o false
                if($response == true){
                    $_SESSION['msj'] = "Usuario eliminado correctamente...";
                }else{
                    $_SESSION['error'] = "No se pudo eliminar el usuario, intente nuevamente...";
                }
                header('Location: users.php');
                break;
            // case '':
            //     break;
        }

    }

    function selectAll(){
        $conect = conexion();
        return $conect->query("SELECT id, name, email, rol FROM users");
    }

    function selectById($id){
        $conect = conexion();
        return $conect->query("SELECT id, name, email, rol FROM users WHERE id = $id LIMIT 1");
    }