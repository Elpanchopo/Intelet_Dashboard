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

function getJsonData3($consulta) {
    $conexion = conectarDB3();
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

function getJsonData4($consulta) {
    $conexion = conectarDB4();
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

function getJsonData5($consulta) {
    $conexion = conectarDB5();
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

function getJsonData6($consulta) {
    $conexion = conectarDB6();
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

function getJsonData7($consulta) {
    $conexion = conectarDB7();
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

function getJsonData8($consulta) {
    $conexion = conectarDB8();
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

function getJsonData9($consulta) {
    $conexion = conectarDB9();
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