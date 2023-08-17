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
