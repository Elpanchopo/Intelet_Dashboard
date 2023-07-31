<?php
require_once __DIR__ . '/../controllers/common.php';

function getGestionesEjecutivosHora() {
    $query = "SELECT * FROM v_grx_gestionEjeHora order by 1";
    echo getJsonData($query);
}

function getTipoGestionesEjecutivos() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales order by 1";
    echo getJsonData($query);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora(){
    $query = "SELECT * FROM v_gest_ejec_hora";
    return getJsonData($query);
}

function getTablaTGDiarioTotal(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario";
    return getJsonData($query);
};

function getTablaTGDiarioSumTotal(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario";
    return getJsonData($query);
}

//funciones consumer
function getGestionesEjecutivosHora2(){
    $query = "select * from gestiones";
    echo getJsonData2($query);
}
?>
