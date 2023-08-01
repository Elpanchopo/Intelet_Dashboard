<?php

include 'global_vars.php';


function conectarDB($nConn) {
    
    global $host, $puerto, $avn, $consumer, $entel, $forum, $globalvida, $rutasmaipo, $salcobran, $santander, $abcdin;

    switch ($nConn) {
        case 1:
            $usuario = $avn['usuario'];
            $contrasena = $avn['contrasena'];
            $base_datos = $avn['base_datos'];
            break;
        case 2:
            $usuario = $consumer['usuario'];
            $contrasena = $consumer['contrasena'];
            $base_datos = $consumer['base_datos'];
            break;
        case 3:
            $usuario = $entel['usuario'];
            $contrasena = $entel['contrasena'];
            $base_datos = $entel['base_datos'];
            break;
        case 4:
            $usuario = $forum['usuario'];
            $contrasena = $forum['contrasena'];
            $base_datos = $forum['base_datos'];
            break;
        case 5:
            $usuario = $globalvida['usuario'];
            $contrasena = $globalvida['contrasena'];
            $base_datos = $globalvida['base_datos'];
            break;
        case 6:
            $usuario = $rutasmaipo['usuario'];
            $contrasena = $rutasmaipo['contrasena'];
            $base_datos = $rutasmaipo['base_datos'];
            break;
        case 7:
            $usuario = $salcobran['usuario'];
            $contrasena = $salcobran['contrasena'];
            $base_datos = $salcobran['base_datos'];
            break;
        case 8:
            $usuario = $santander['usuario'];
            $contrasena = $santander['contrasena'];
            $base_datos = $santander['base_datos'];
            break;
        case 9:
            $usuario = $abcdin['usuario'];
            $contrasena = $abcdin['contrasena'];
            $base_datos = $abcdin['base_datos'];
            break;
        default:
            $usuario = '';
            $contrasena = '';
            $base_datos = '';
            break;
    }


    $conn = pg_connect("host=" . $host . " port=" . $puerto . " dbname=" . $base_datos . " user=" . $usuario . " password=" . $contrasena);
    
    if (!$conn) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conn;
}
