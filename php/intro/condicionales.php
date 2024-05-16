<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras condicionales</title>
</head>
<body>
    <h1>Estructuras condicionales</h1>
    <p>
        Las estructuras condicionales permiten tomar decisiones en base a comparaciones
        en el código
    </p>
    <p>
        La estructura <strong>IF</strong>, se utiliza para evaluar una expresion y ejecutar
        un bloque de codigo si la expresion es verdadera; Si la expresion es falsa el
        codigo no se ejecuta
    </p>
    Sintaxis: <br>
    <code>
            if(expresion){ <br>
                <br>
                código <br>
                <br>
            }else{ <br>
                <br>
                codigo
                <br>
            }
    </code>
    <br>
    <?php 
        $edad = 5;
        if($edad > 17){
            echo "Puedes votar...";
        }else { //si no es mayor de 17
            echo "Tas pollito, no puedes votar...";
        }
        echo "<br>";
        $sexo = "X";
        if($sexo == "M"){
            echo "Masculino";
        }else if($sexo=="F"){
            echo "Femenino";
        }else if($sexo == 'H'){
            echo "Gay";
        }else if($sexo == 'L'){

        }else{
            echo "No se identifico..."; 
        }

    ?>

    <p>
        Ejercicio: <br>
        Crear una estructura condicional que evalue la calificación mostrando los siguientes mensajes:
            Si la calificación es 5 o menor, 'Reprobado'
            Si la calificación es 6          'Suficiente'
            Si la calificación es 7          'Satisfactiorio' 
            Si la calificación es 8          'Bien'
            Si la calificación es 9          'Muy Bien'
            Si la calificación es 10         'Excelente'
    </p>


    <?php 

        // Favor de indicar su calificación en un valor NO mayor a 10 

        $calificacion = 20;

        if($calificacion < 6){
            echo 'Reprobado...';
        }else if(($calificacion >=6) && ($calificacion < 7)){
            echo 'Suficiente';
        }else if($calificacion >=7 && $calificacion < 8){
            echo 'Satisfactorio';
        }else if($calificacion >=8 && $calificacion < 9){
            echo 'Bien';
        }else if($calificacion >=9 && $calificacion < 10){
            echo 'Muy Bien';
        }else if($calificacion == 10){
            echo 'Excelente';
        }else{
            echo 'Valor invalido...';
        }
    
    
    ?>

</body>
</html>