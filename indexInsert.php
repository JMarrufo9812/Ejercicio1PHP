<?php

include './Queries/Queries.php';
$objExecute = new ExecuteQueries();
$sql ="INSERT INTO datos_personales (id_DatosP, nombre, apellido, fecha_nacimiento) VALUES ('3','josias', 'marrufo', '1997-12-04')";
$valor = $objExecute->executeInsert($sql);
if($valor){
    echo"No se inserto los valores";
}else{
    echo"Se inserto los valores correctamente";
}
?>