<?php

require_once __DIR__ . '/models/login_fx.php';


//eliminar llamada a inicio de sesión al implementar y eliminar session_start() de common
//iniciarSesion();

//check sesión
if(isset($_SESSION['ncodigo_usuario'])){
    // echo $_SESSION['ncodigo_usuario'];
    header("Location: /dashboard/views");
    exit;
} else {
    echo 'No hay sesión activa :C';
    //redireccionar al login principal
}

function iniciarSesion() {
    $usuario = 'francisco@gmail.com';
    $pass = '12345678';


    $userArr = login($usuario, $pass);

    $_SESSION['nid_usuario']=$userArr['usuario_id'];
    $_SESSION['ncodigo_usuario']=$userArr['correo_electronico'];
    $_SESSION['nnombre_usuario']=$userArr['nombres'];
    $_SESSION['napelli_usuario']=$userArr['apellidos'];
}





?>
