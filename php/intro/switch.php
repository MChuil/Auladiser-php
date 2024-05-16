<?php 

    /**
     *      Switch
     *      Es una estructura de seleccion multiple, la cual permite la toma de decisiones basada en 
     *      multiples opciones o casos
     * 
     *      sintaxis:
     *          switch (variable){
     *              case valor:
     *                  código...
     *                  break;
     *              case valor:
     *                  código...
     *                  break;
     *              ...
     *              default:
     *                  código...
     *                  break;
     *          }
     */

        $calificacion = 10;

        switch ($calificacion){
            case 10:
                echo "Excelente...";
                break;
            case 9:
                echo 'Muy bien...';
                break;
            case 8:
                echo "Bien...";
                break;
            case 7:
                echo "Satisfactiorio...";
                break;
            case 6:
                echo 'Suficiente...';
                break;
            default:
                echo 'Reprobado...';
                break;
        }

?>