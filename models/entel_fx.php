<?php
require_once __DIR__ . '/../controllers/common.php';


// Entel
//funciones gestiones Entel
function getGestionesEjecutivosHora3() {
    $query = "SELECT * FROM v_grx_gestionejehora order by 1";
    echo getJsonData($query, 3);
}

function getTipoGestionesEjecutivos3() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales order by 1";
    echo getJsonData($query, 3);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora3(){
    $query = "SELECT * FROM v_gest_ejec_hora";
    return getJsonData($query, 3);
}

function getTablaTGDiarioTotal3(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 3);
};

function getTablaTGDiarioSumTotal3(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 3);
}