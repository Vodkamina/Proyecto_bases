<?php

include_once '../BD/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

#Post
$INSERCION = "INSERT INTO ventas_detalle (codigo_venta, cantidad, codigo_producto) VALUES (4444, 444, 444)";

if ($conexion->query($INSERCION) === TRUE) {
  echo "New record created successfully";
} else {
  //echo "Error: " . $INSERCION . "<br>" . $conexion->error;
}

?>