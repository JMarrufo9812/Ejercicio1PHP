<?php

include './Queries/Queries.php';
$objExecute = new ExecuteQueries();
$sql ="UPDATE datos_personales SET nombre='josias', apellido='marrufo', fecha_nacimiento='1997-12-04' WHERE datos_personales. id_Datosp = 3"; 
$valor = $objExecute->executeInsert($sql);
if($valor){
    echo"error al actualizar los valores";
}else{
    echo"Se actualizaron los valores correctamente";
}
?>

