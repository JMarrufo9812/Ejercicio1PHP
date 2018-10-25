<?php

include './Queries/Queries.php';
$objExecute = new ExecuteQueries();
$sql ="DELETE FROM datos_personales WHERE datos_personales. id_Datosp = 5";
$valor = $objExecute->executeInsert($sql);
if($valor){
    echo"No se elimino los valores";
}else{
    echo"Se elimino los valores correctamente";
}