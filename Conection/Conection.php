<?php
    class Connection {
        function getConnection(){
            $con = new mysqli("localhost", "root", "", "ejercicio1php");
            if ($con->connect_errno == false ) {
                return $con;
            }else{
                echo"</br>";
                echo"Fallo la connection a la base de datos";
                echo"</br>";
                echo $con->connect_error;
                return false;
            }
        }
    }
?>