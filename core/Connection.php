<?php
/**
 * Created by PhpStorm.
 * User: kmmx02-ubuntu
 * Date: 16/06/18
 * Time: 01:38 PM
 */

    function getConnection(){
        $servername = "localhost";
        $username = "sandoval";
        $password ="Bsandoval_1994";

        $conn = new mysqli($servername, $username, $password);

        //verifica conexion
        if($conn -> connect_error){
            die("Eroor al conectar". $conn->connect_error);
        }

        return $conn;
    }