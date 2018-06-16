<?php
    function startsWith(string $haystack, string $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    function endsWith(string $haystack, string $needle)
    {
        $length = strlen($needle);
        return $length === 0 ||
        (substr($haystack, -$length) === $needle);
    }

    function getConnection(){
        $servername = "localhost";
        $username = "sandoval";
        $password ="Bsandoval_1994";

        $conn = new mysqli($servername, $username, $password);

        //verifica conexion
        if($conn -> connect_error){
            die("Error al conectar". $conn->connect_error);
        }
        echo "Conexion chida <br>";
        $sql ='select NAME from kmmx_curso_db.users';
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "Nombre: ".$row['NAME']."<br>";

            }
        }
        $conn->close();
        return $conn;
    }

