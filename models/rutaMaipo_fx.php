<?php
require_once __DIR__ . '/../controllers/common.php';



// Ruta del maipo
//funciones gestiones Ruta del maipo
function getGestionesEjecutivosHora6() {
    $query = "SELECT * FROM v_grx_gestionejehora order by 1";
    echo getJsonData($query, 6);
}

function getTipoGestionesEjecutivos6() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales order by 1";
    echo getJsonData($query, 6);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora6(){
    $query = "SELECT * FROM v_gest_ejec_hora";
    return getJsonData($query, 6);
}

function getTablaTGDiarioTotal6(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 6);
};

function getTablaTGDiarioSumTotal6(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 6);
};