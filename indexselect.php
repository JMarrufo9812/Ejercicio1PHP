<?php
include './Queries/Queries.php';
$objExecute = new ExecuteQueries();
$sql ="SELECT * FROM datos_personales";
$resultado = $objExecute->executeSelect($sql);
$lstDatosp = [];
    while ($rs = $resultado->fetch_array()) {
        $objDatosp = new stdClass();
        $objDatosp->id_DatosP = $rs["id_DatosP"];
        $objDatosp->nombre  = $rs["nombre"];
        $objDatosp->apellido = $rs["apellido"];
        $objDatosp->fechana = $rs["fecha_nacimiento"];
        $lstDatosp[] = $objDatosp;
    }
echo json_encode($lstDatosp);
?>
