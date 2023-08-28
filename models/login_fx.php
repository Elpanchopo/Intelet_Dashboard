<?php
require_once __DIR__ . '/../controllers/common.php';

//AVN
//Funciones gestiones AVN
function login($usr, $psw) {
    $query = "select per.id , per.nombres , per.apellidos , per.correo_electronico 
                    , u.id usuario_id, (case when u.activo then 'Si' else 'No' end) activo
                from personas per 
                    left join usuarios u on u.personas_id=per.id 
                    left join privilegios pri on pri.id = u.privilegios_id 
                where per.correo_electronico='$usr' and u.contrasena = encode(digest('$psw', 'sha1'), 'hex')";

    $json_resp = getJsonData($query, 10);

    $keysToSearch = ['id', 'nombres', 'apellidos', 'correo_electronico', 'usuario_id', 'activo'];
    $values = [];

    foreach ($keysToSearch as $key) {
        $startPos = strpos($json_resp, "\"$key\":");
        if ($startPos !== false) {
            $startPos += strlen("\"$key\":");
            $endPos = strpos($json_resp, ",", $startPos);
            if ($endPos === false) {
                $endPos = strpos($json_resp, "}", $startPos);
            }
            if ($endPos !== false) {
                $value = substr($json_resp, $startPos, $endPos - $startPos);
                $values[$key] = trim($value, "\" ");
            }
        }
    }

    return $values;
}
