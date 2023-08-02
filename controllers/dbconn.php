<?php

include 'global_vars.php';


function conectarDB($nConn) {
    
    global $conexiones;

    switch ($nConn) {
        case 1:
            $connString = $conexiones['avn'];
            break;
        case 2:
            $connString = $conexiones['consumer'];
            break;
        case 3:
            $connString = $conexiones['entel'];
            break;
        case 4:
            $connString = $conexiones['forum'];
            break;
        case 5:
            $connString = $conexiones['globalvida'];
            break;
        case 6:
            $connString = $conexiones['rutasmaipo'];
            break;
        case 7:
            $connString = $conexiones['salcobran'];
            break;
        case 8:
            $connString = $conexiones['santander'];
            break;
        case 9:
            $connString = $conexiones['abcdin'];
            break;
        default:
            $connString = '';
            break;
    }

    $conn = pg_connect($connString);

    if (!$conn) {
        die("Error al conectar a la base de datos: " . pg_last_error());
    }
    return $conn;
}
