<?php 
    /**
     *      TIPOS DE DATOS
     *          string  = Cadenas de texto (#DWe666)
     *          numerico (entero) =  1231546
     *          numerico (decimal) =  56.89
     *          booleano =  true/false
     */

    $nombre = "Miguel Chuil";
    $codigo = "AB45788#asd!";
    $numero = 3;
    $number = 3.1416;
    $casado = true;
    $number = 'Juan Camaney';
    echo "El numero es: " . $number;

    /**
     *      OPERADORES MATEMATICOS Y DE ASIGNACIÓN
     * 
     *      +   suma
     *      -   resta
     *      /   división
     *      *   multiplicación
     *      =   asignación
     * 
     */
    echo "<hr>";
    $numberOne = 15;
    $numberTwo = 23;
    $result =  $numberOne / $numberTwo;
    echo "El resultado es: " . $result;
    echo "<hr>";
    define('IVA', 0.16);
    $price = 5600;
    $iva = $price * IVA;
    
    echo "El iva de $price, es de: $iva";
    
    echo "<hr>";
    echo 4 * 5 - 6 + 4 * 2 + 1 * 0;  // Jose Antonio 22, Andrea 22, 
    
    echo "<hr>";

    /**
     *      OPERADORES LOGICOS Y DE COMPARACIÓN
     *         ==   igual que
     *         >    mayor que
     *         <    menor que
     *         >=   mayor o igual que
     *         <=   menor o igual que
     *         !=   diferente que
     *      
     *          Los operadores lógicos se utilizan para combinar comparaciones y crear estructuras de control lógicas.
     *         &&   AND  Este operador devuelve verdadero si ambas comparaciones son verdaderas
     *         ||  OR    Este operador devuelve verdadero si al menos una de las comparaciones es verdadera
     *          !   Negación    Devuelve el valor opuesto a la comparación
     */
        $a = 15;
        $b = 8;
        $c = 45;
        var_dump($a != $b);
        echo "<hr>";
        var_dump(!($a > $c));
        echo "<hr>";
        

        /**
         *  Operadores de asignación combinada, los cuales son:
         *      +=  (suma y asigna)
         *      -=  (resta y asigna)
         *      *=  (multiplica y asigna)
         *      /=  (divide y asigna)
         * 
         * 
         */

        $miNumero = 16;
        $miNumero += 5;
        echo $miNumero; // 21
?>