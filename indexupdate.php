<?php

include './Queries/Queries.php';
$objExecute = new ExecuteQueries();
$sql ="UPDATE datos_personales (id_DatosP, nombre, apellido, fecha_nacimiento) SET ('1','eliot', 'marrufo', '1997-12-05') Where 2 "; 
$valor = $objExecute->executeInsert($sql);
if($valor){
    echo"error al actualizar los valores";
}else{
    echo"Se actualizaron los valores correctamente";
}
?>