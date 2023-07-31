<?php
// Datos de conexión a la base de datos PostgreSQL
$host = "192.168.1.200"; // Normalmente es "localhost" si el servidor de PostgreSQL está en el mismo servidor que el código PHP
$puerto = "5432"; // Puerto por defecto de PostgreSQL
$usuario = "bi_avn"; // Nombre de usuario para acceder a la base de datos AVN
$contrasena = "DPSh^cV&1gCP5G6o"; // Contraseña del usuario
$nombre_base_datos = "intelet_bi_avn"; // Nombre de la base de datos a la que deseas conectarte

$usuario2 = "bi_consumer"; // Nombre de usuario para acceder a la base de datos Consumer
$contrasena2 = "OXp4rkUADd*zXDMS"; // Contraseña del usuario
$nombre_base_datos2 = "intelet_bi_consumer"; // Nombre de la base de datos a la que deseas conectarte

$usuario3 = "bi_entel"; // Nombre de usuario para acceder a la base de datos Entel
$contrasena3 = "lSYumbunqGILz&@w"; // Contraseña del usuario
$nombre_base_datos3 = "intelet_bi_entel"; // Nombre de la base de datos a la que deseas conectarte

$usuario4 = "bi_forum"; // Nombre de usuario para acceder a la base de datos Forum
$contrasena4 = "P8pKinF*OYLfOp84"; // Contraseña del usuario
$nombre_base_datos4 = "intelet_bi_forum"; // Nombre de la base de datos a la que deseas conectarte

$usuario5 = "bi_globalvia"; // Nombre de usuario para acceder a la base de datos Globalvia
$contrasena5 = 'pF$1l#5&vX0N54A$'; // Contraseña del usuario
$nombre_base_datos5 = "intelet_bi_globalvia"; // Nombre de la base de datos a la que deseas conectarte

$usuario6 = "bi_rutas_maipo"; // Nombre de usuario para acceder a la base de datos Ruta del maipo
$contrasena6 = "X8cx&c&jIkD8clY*"; // Contraseña del usuario
$nombre_base_datos6 = "intelet_bi_rutas_maipo"; // Nombre de la base de datos a la que deseas conectarte

$usuario7 = "bi_rutas_salcobran"; // Nombre de usuario para acceder a la base de datos Salcobrand
$contrasena7 = 'aNGzvd%&VC*li$Rj'; // Contraseña del usuario
$nombre_base_datos7 = "intelet_bi_rutas_salcobran"; // Nombre de la base de datos a la que deseas conectarte

$usuario8 = "bi_rutas_santander"; // Nombre de usuario para acceder a la base de datos
$contrasena8 = '%*Pkrlp8$kYdsgmU'; // Contraseña del usuario
$nombre_base_datos8 = "intelet_bi_rutas_santander"; // Nombre de la base de datos a la que deseas conectarte

$usuario9 = "bi_abcdin"; // Nombre de usuario para acceder a la base de datos
$contrasena9 = 'UvhgqLeELdeoSZ$H'; // Contraseña del usuario
$nombre_base_datos9 = "intelet_bi_abcdin"; // Nombre de la base de datos a la que deseas conectarte



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

// Función para realizar la conexión a la base de datos PostgreSQL Consumer
function conectarDB3() {
    // Intentamos conectarnos a la base de datos
    $conexion = pg_connect("host=" . $GLOBALS['host'] . " port=" . $GLOBALS['puerto'] . " dbname=" . $GLOBALS['nombre_base_datos3'] . " user=" . $GLOBALS['usuario3'] . " password=" . $GLOBALS['contrasena3']);
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conexion;
}

// Función para realizar la conexión a la base de datos PostgreSQL Consumer
function conectarDB4() {
    // Intentamos conectarnos a la base de datos
    $conexion = pg_connect("host=" . $GLOBALS['host'] . " port=" . $GLOBALS['puerto'] . " dbname=" . $GLOBALS['nombre_base_datos4'] . " user=" . $GLOBALS['usuario4'] . " password=" . $GLOBALS['contrasena4']);
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conexion;
}

// Función para realizar la conexión a la base de datos PostgreSQL Consumer
function conectarDB5() {
    // Intentamos conectarnos a la base de datos
    $conexion = pg_connect("host=" . $GLOBALS['host'] . " port=" . $GLOBALS['puerto'] . " dbname=" . $GLOBALS['nombre_base_datos5'] . " user=" . $GLOBALS['usuario5'] . " password=" . $GLOBALS['contrasena5']);
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conexion;
}

// Función para realizar la conexión a la base de datos PostgreSQL Consumer
function conectarDB6() {
    // Intentamos conectarnos a la base de datos
    $conexion = pg_connect("host=" . $GLOBALS['host'] . " port=" . $GLOBALS['puerto'] . " dbname=" . $GLOBALS['nombre_base_datos6'] . " user=" . $GLOBALS['usuario6'] . " password=" . $GLOBALS['contrasena6']);
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conexion;
}

// Función para realizar la conexión a la base de datos PostgreSQL Consumer
function conectarDB7() {
    // Intentamos conectarnos a la base de datos
    $conexion = pg_connect("host=" . $GLOBALS['host'] . " port=" . $GLOBALS['puerto'] . " dbname=" . $GLOBALS['nombre_base_datos7'] . " user=" . $GLOBALS['usuario7'] . " password=" . $GLOBALS['contrasena7']);
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conexion;
}

// Función para realizar la conexión a la base de datos PostgreSQL Consumer
function conectarDB8() {
    // Intentamos conectarnos a la base de datos
    $conexion = pg_connect("host=" . $GLOBALS['host'] . " port=" . $GLOBALS['puerto'] . " dbname=" . $GLOBALS['nombre_base_datos8'] . " user=" . $GLOBALS['usuario8'] . " password=" . $GLOBALS['contrasena8']);
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conexion;
}

// Función para realizar la conexión a la base de datos PostgreSQL Consumer
function conectarDB9() {
    // Intentamos conectarnos a la base de datos
    $conexion = pg_connect("host=" . $GLOBALS['host'] . " port=" . $GLOBALS['puerto'] . " dbname=" . $GLOBALS['nombre_base_datos9'] . " user=" . $GLOBALS['usuario9'] . " password=" . $GLOBALS['contrasena9']);
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conexion;
}

?>


