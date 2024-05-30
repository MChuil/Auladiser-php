<?php 

    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $resultado = 0;
    switch ($operator) {
        case '+':
            $resultado = $num1 + $num2;
            break;
        case '-':
            $resultado = $num1 - $num2;
            break;
        case '*':
            $resultado = $num1 * $num2;
            break;
        case '/':
            if($num2 == 0){
                echo "No se puede dividir por 0 <br>";
                break;
            }
            $resultado = $num1 / $num2;
            break;
        default:
            echo "Operador no válido <br>";
            break;
    }
    echo "Resultado: $resultado";

    echo "<p><a href='calculadora.html'>Regresar</a></p>";
?>