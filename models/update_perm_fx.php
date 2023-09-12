<?php
require_once __DIR__ . '/../controllers/common.php';

function updatePerms($usuario, $permisos) {
    $query = "UPDATE dashboard_privs SET access = '$permisos' WHERE id = $usuario";
    return updateData($query, 10);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $permisos = $_POST['permisos'];
  
    $res = updatePerms($usuario, $permisos);
    // Llama a tu función PHP existente con los parámetros $usuario y $permisos
    if ($res){
        echo 'Permisos actualizados con éxito.';
     } else {
        echo 'Error al intentar actualizar';
    }
  
    // Devuelve una respuesta (puedes personalizar la respuesta según tus necesidades)
    //echo 'Función ejecutada con éxito. Usuario: ' . $usuario . ', Permisos: ' . $permisos;
  } else {
    echo 'No se recibieron datos POST.';
  }

