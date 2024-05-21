<?php 

    /**
     *  Metodos HTTP (GET, POST, put, patch, delete)
     * 
     *  Para el metodo GET, php utilza la variable "super global" $_GET
     *  uso:
     *      $_GET['nombreDeLaVariable']
     * 
     */

        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
        $msj = $_GET['pablito'];
        
        echo "Datos: <br>
                Nombre: $name <br>
                Correo: $email <br>
                Telefono: $phone <br>
                Mensaje: $msj";
?>