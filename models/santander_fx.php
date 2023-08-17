<?php
require_once __DIR__ . '/../controllers/common.php';



// Santander
//funciones gestiones Santander
function getGestionesEjecutivosHora8() {
    $query = "SELECT * FROM v_grx_gestionejehora order by 1";
    echo getJsonData($query, 8);
}

function getTipoGestionesEjecutivos8() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales order by 1";
    echo getJsonData($query, 8);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora8(){
    $query = "SELECT * FROM v_gest_ejec_hora";
    return getJsonData($query, 8);
}

function getTablaTGDiarioTotal8(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 8);
};

function getTablaTGDiarioSumTotal8(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 8);
};
