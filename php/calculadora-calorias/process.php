<?php
    session_start();

    if(isset($_GET['action'])){
        session_destroy();
        header('Location: index.php');
        return;
    }

    /**
     *  isset($variable) -> verifica si la variable existe
     * 
     * 
     *  empty($variable) -> verifica si la variable esta vacia ('' o 0 o null o false o [] o array() o $variable_no_definida)
     *  $edad = 0;
     *  $miArray = [];
     *  
     *  empty($edad) -> true
     *  empty($miArray) -> true
     */

    //validar datos
    if(empty($_POST['sex']) || empty($_POST['weight']) || empty($_POST['height']) || empty($_POST['age']) || empty($_POST['activity'])){
        $_SESSION['error'] = 'Faltan datos';
        header('Location: index.php');
        return;
    }

    $sex = $_POST['sex'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $age = $_POST['age'];
    $activity = $_POST['activity'];


    function tmbMale($weight, $height, $age){
        return 66.5 + (13.75 * $weight) + (5.003 * $height) - (6.755 * $age);
    }


    function tmbFemale($weight, $height, $age){
        return 655.1 + (9.563 * $weight) + (1.850 * $height) - (4.676 * $age);
    }


    if($sex == 'f'){
        $tmb = tmbFemale($weight, $height, $age);
    }else if($sex == 'm'){
        $tmb = tmbMale($weight, $height, $age);
    }else{
        $tmb = 0;
    }

    switch ($activity) {
        case 'sedentario':
            $response = $tmb * 1.2;
            break;
        case 'ligero':
            $response = $tmb * 1.375;
            break;
        case 'moderado':
            $response = $tmb * 1.55;
            break;
        case 'intenso':
            $response = $tmb * 1.725;
            break;
        case 'muyintenso':
            $response = $tmb * 1.9;
            break;
        default:
            $response = 0;
            break;
    }

    if($response == 0 || $tmb == 0){
        $_SESSION['error'] = 'Faltan datos';
    }else{
        $_SESSION['calories'] = round($response);
        $_SESSION['tmb'] = round($tmb);
    }
    header('Location: index.php');
    return;