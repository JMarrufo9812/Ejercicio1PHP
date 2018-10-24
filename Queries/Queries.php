<?php
include './Conection/Conection.php';
class ExecuteQueries {
    function executeSelect($sql){
        $obj  = new Connection();
        $con = $obj->getConnection();
        if($con != false){
            $resultado = $con->query($sql);
            return  $resultado;
        }
        else{
            return false;
        }
    }

    function executeInsert($sql){
        $obj  = new Connection();
        $con = $obj->getConnection();
        if($con != false){
            $resultado = $con->query($sql);
            if($con->insert_id >0){
                return true;
            }else{
                return false;
            }
        }
        else{
            return false;
        }
    }
}
?>