<?php
require_once __DIR__ . '/../controllers/common.php';


// Forum
//funciones gestiones Forum
function getGestionesEjecutivosHora4() {
    $query = "SELECT * FROM v_grx_gestionejehora order by 1";
    echo getJsonData($query, 4);
}

function getTipoGestionesEjecutivos4() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales order by 1";
    echo getJsonData($query, 4);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora4(){
    $query = "SELECT * FROM v_gest_ejec_hora";
    return getJsonData($query, 4);
}

function getTablaTGDiarioTotal4(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 4);
};

function getTablaTGDiarioSumTotal4(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 4);
};
