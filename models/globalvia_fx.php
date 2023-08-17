<?php
require_once __DIR__ . '/../controllers/common.php';


// Globalvia
//funciones gestiones Globalvia
function getGestionesEjecutivosHora5() {
    $query = "SELECT * FROM v_grx_gestionejeHora order by 1";
    echo getJsonData($query, 5);
}

function getTipoGestionesEjecutivos5() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales order by 1";
    echo getJsonData($query, 5);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora5(){
    $query = "SELECT * FROM v_gest_ejec_hora";
    return getJsonData($query, 5);
}

function getTablaTGDiarioTotal5(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 5);
};

function getTablaTGDiarioSumTotal5(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 5);
};
