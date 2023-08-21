<?php
require_once __DIR__ . '/../controllers/common.php';

//AVN
//Funciones gestiones AVN
function getGestionesEjecutivosHora() {
    $query = "SELECT * FROM v_grx_gestionejehora order by 1";
    echo getJsonData($query, 1);
}

function getTipoGestionesEjecutivos() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales order by 1";
    echo getJsonData($query, 1);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora(){
    $query = "SELECT * FROM v_gest_ejec_hora";
    return getJsonData($query, 1);
}

function getTablaTGDiarioTotal(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 1);
};

function getTablaTGDiarioSumTotal(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 1);
}

function getTotalGestiones(){
    $query = "SELECT COUNT(rut) AS \"rut_total\" FROM planificacion_tag;";
}

function getGestionesTotalesMes(){
    $query = <<<EOT
    "SELECT
    c2
    FROM (
        SELECT 
            (SELECT COUNT(pt.rut) AS "rut_total" FROM planificacion_tag pt) AS c1,
            (SELECT COUNT(DISTINCT g.rut_num) AS "tocados" 
            FROM gestiones g 
            WHERE (g.fecha_gestion >= DATE_TRUNC('month', CURRENT_DATE) AND g.fecha_gestion < CURRENT_DATE) 
            AND ranking = 'CT') AS c2,
            COUNT(*) AS cnt_dias
        FROM (
            SELECT DISTINCT fecha_gestion::date
            FROM gestiones g
            WHERE g.fecha_gestion >= DATE_TRUNC('month', CURRENT_DATE) AND g.fecha_gestion < CURRENT_DATE
        ) AS tmp2
    ) AS tmp;"
    EOT;
    }


// //  Query datos a presentar.  
// SELECT
// c1,
// c2,
// (c2 / cnt_dias) AS c3,
// ROUND((c2 / c1::numeric) * 100, 2) || '%' AS c4
// FROM (
// SELECT 
//     (SELECT COUNT(pt.rut) AS "rut total" FROM planificacion_tag pt) AS c1,
//     (SELECT COUNT(DISTINCT g.rut_num) AS "tocados" 
//      FROM gestiones g 
//      WHERE (g.fecha_gestion >= DATE_TRUNC('month', CURRENT_DATE) AND g.fecha_gestion < CURRENT_DATE) 
//      AND ranking = 'CT') AS c2,
//     COUNT(*) AS cnt_dias
// FROM (
//     SELECT DISTINCT fecha_gestion::date
//     FROM gestiones g
//     WHERE g.fecha_gestion >= DATE_TRUNC('month', CURRENT_DATE) AND g.fecha_gestion < CURRENT_DATE
// ) AS tmp2
// ) AS tmp;