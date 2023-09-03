<?php
require_once __DIR__ . '/../controllers/common.php';

function getUserList(){
    $query = "SELECT
    u.id usuario_id,
    CONCAT(UPPER(LEFT(per.nombres, 1)), LOWER(SUBSTRING(per.nombres, 2))) || ' ' || CONCAT(UPPER(LEFT(per.apellidos, 1)), LOWER(SUBSTRING(per.apellidos, 2))) AS nombre_completo, 
                CASE
                    WHEN u.activo THEN 'Si'
                    ELSE 'No'
                END AS activo,
                    perms.access as permisos
            FROM
                personas per
            LEFT JOIN
                usuarios u ON u.personas_id = per.id
            LEFT JOIN
                privilegios pri ON pri.id = u.privilegios_id
            LEFT JOIN 
                    dashboard_privs perms ON u.id = perms.id
            WHERE
                u.activo = TRUE
            ORDER BY
                usuario_id ASC";
    return getJsonData($query, 10);
}
