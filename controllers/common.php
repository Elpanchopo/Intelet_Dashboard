<?php
require_once 'dbconn.php';

function getJsonData($consulta) {
    $conexion = conectarDB();
    $query = $consulta;
    $resultado = pg_query($conexion, $query);
    if (!$resultado) {
        die("Error en la consulta: " . pg_last_error($conexion));
    }
    $datos = array();
    while ($fila = pg_fetch_assoc($resultado)) {
        $datos[] = $fila;
    }
    pg_free_result($resultado);
    pg_close($conexion);
    $json = json_encode($datos);
    return $json;
}

function getJsonData2($consulta) {
    $conexion = conectarDB2();
    $query = $consulta;
    $resultado = pg_query($conexion, $query);
    if (!$resultado) {
        die("Error en la consulta: " . pg_last_error($conexion));
    }
    $datos = array();
    while ($fila = pg_fetch_assoc($resultado)) {
        $datos[] = $fila;
    }
    pg_free_result($resultado);
    pg_close($conexion);
    $json = json_encode($datos);
    return $json;
}

?>