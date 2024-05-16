<?php 

    /**
     * 
     *      Do...While
     * 
     *      sintaxis:
     * 
     *      do{
     *          código...
     *          código...
     *          código...
     *          código...
     * 
     *          incrementador o decrementador
     *      }while(condicion)
     */


    $x = 1;

    do{
        echo $x;
        $x++;
    }while($x<=10);










    
    echo "<hr>";

    $segundos = 0;
    do{
        echo $segundos;
        $segundos--;
    }while($segundos > 0);
    
?>