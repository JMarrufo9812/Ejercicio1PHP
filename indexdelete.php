<?php

include './Queries/Queries.php';
$objExecute = new ExecuteQueries();
$sql ="DELETE FROM datos_personales WHERE 3";
$valor = $objExecute->executeInsert($sql);
if($valor){
    echo"No se inserto los valores";
}else{
    echo"Se inserto los valores correctamente";
}