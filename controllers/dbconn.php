<?php
// Datos de conexión a la base de datos PostgreSQL
$host = "192.168.1.200"; // Normalmente es "localhost" si el servidor de PostgreSQL está en el mismo servidor que el código PHP
$puerto = "5432"; // Puerto por defecto de PostgreSQL
$usuario = "bi_avn"; // Nombre de usuario para acceder a la base de datos
$contrasena = "DPSh^cV&1gCP5G6o"; // Contraseña del usuario
$nombre_base_datos = "intelet_bi_avn"; // Nombre de la base de datos a la que deseas conectarte

$usuario2 = "bi_consumer"; // Nombre de usuario para acceder a la base de datos
$contrasena2 = "OXp4rkUADd*zXDMS"; // Contraseña del usuario
$nombre_base_datos2 = "intelet_bi_consumer"; // Nombre de la base de datos a la que deseas conectarte

// Función para realizar la conexión a la base de datos PostgreSQL
function conectarDB() {
    // Intentamos conectarnos a la base de datos
    $conexion = pg_connect("host=" . $GLOBALS['host'] . " port=" . $GLOBALS['puerto'] . " dbname=" . $GLOBALS['nombre_base_datos'] . " user=" . $GLOBALS['usuario'] . " password=" . $GLOBALS['contrasena']);
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conexion;
}

// Función para realizar la conexión a la base de datos PostgreSQL Consumer
function conectarDB2() {
    // Intentamos conectarnos a la base de datos
    $conexion = pg_connect("host=" . $GLOBALS['host'] . " port=" . $GLOBALS['puerto'] . " dbname=" . $GLOBALS['nombre_base_datos2'] . " user=" . $GLOBALS['usuario2'] . " password=" . $GLOBALS['contrasena2']);
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conexion;
}
?>


