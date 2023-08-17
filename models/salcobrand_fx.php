<?php
require_once __DIR__ . '/../controllers/common.php';

// Salcobrand
//funciones gestiones Salcobrand
function getGestionesEjecutivosHora7() {
    $query = "SELECT * FROM v_grx_gestionejehora_salcobrand order by 1";
    echo getJsonData($query, 7);
}

function getTipoGestionesEjecutivos7() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales_salcobrand order by 1";
    echo getJsonData($query, 7);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora7(){
    $query = "SELECT * FROM v_gest_ejec_hora_salcobrand";
    return getJsonData($query, 7);
}

function getTablaTGDiarioTotal7(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_salcobrand";
    return getJsonData($query, 7);
};

function getTablaTGDiarioSumTotal7(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario_salcobrand";
    return getJsonData($query, 7);
};
