<?php
    // Este un comentario de una sola linea

    /**
     *      VARIABLES
     *         Es un espacio en memoria que permite almacenar información. Se utilizan
     *          identificadores para definir una variable.
     *         ejem:
     *              $numero = 99; 
     *      
     *         Los nombre de variables (identificadores), tienen reglas estrictas para
     *         su definición:
     *          1. No pueden iniciar con numeros
     *          2. No pueden iniciar con simbolos
     *          3. No pueden llevar simbolos, a excepción de barra baja(_) o guion (-)
     *          4. No pueden utilizar palabras reservadas del lenguaje
     *          5. No pueden llevar espacios en blanco
     * 
     *          Errores
     *              $8cantidad = 3;
     *              $#cantidad = 3;
     *              $can?tidad = 3;
     *              $echo = 3;
     *              $porcentaje de impuesto = 0.16
     * 
     *          NOTA: Los nombre de las variables son sensibles a mayusculas y minusculas
     *              $numero  <>  $NUMERO
     * 
     *          Los nombre de variables deben ser descriptivos
     *           ejemplo:
     *              $p = 9.5
     *              $promedioDeVenta = 9.5
     *              $promedioDeAlumno = 9.5
     * 
     *          Convenciones para declarar variables:
     *              Snake Case: $mi_variable;
     *              Upper Camel Case: $MiVariable;
     *              Lower Camel Case: $miVariable;
     *              Kebab Case: $mi-variable;
     *          
     */

    $promedio = 9.5;
    $promedioDos = "9.5";

    $totalDeVenta = 5000;

    $promedio = 6.0;

    echo $promedio;

    $nombre = "Luciano Pavarotti";

    echo "<br>";

    $nombre = "Diego Armando Maradona";

    echo "Bienvenido al curso de PHP, " . $nombre . ". No olvides dedicarle minimo 4 horas semanales a practicar.";

    echo "<hr>";

    /**
     *  CONSTANTES
     *      Funcionan como las variables, pero con la diferencia de que su contenido no se puede modificar.
     *      Por convención las constantes deben de ir en mayusculas.
     *      Se deben seguir las mismas reglas que para declarar una variable
     *      Ejemplo:
     *          define("nombredelaconstante", valor);
     * 
     */

    define("PI", 3.1416);
    define("IVA", 0.16);

    echo "Pi: " . PI . "<br>IVA: " . IVA;
    echo "<hr>";
    echo "Mi versión de php: " . PHP_VERSION;
    echo "<hr>";
    echo "Mi sistema operativo: " . PHP_OS;
    echo "<hr>";
    echo "Mi ubicación: " . __FILE__;
?>