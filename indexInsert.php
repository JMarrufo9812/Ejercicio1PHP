<?php

include './Queries/Queries.php';
$objExecute = new ExecuteQueries();
$sql ="INSERT INTO datos_personales ( nombre, apellido, fecha_nacimiento) VALUES ('danie', 'pat', '1999-11-05')";
$valor = $objExecute->executeInsert($sql);
if($valor){
    echo"Se inserto los valores correctamente";
}else{
    echo"No se inserto los valores";
}
?>

