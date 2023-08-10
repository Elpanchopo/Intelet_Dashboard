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

// Consumer
//funciones gestiones consumer
function getGestionesEjecutivosHora2() {
    $query = "SELECT * FROM v_grx_gestionejehora order by 1";
    echo getJsonData($query, 2);
}

function getTipoGestionesEjecutivos2() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales order by 1";
    echo getJsonData($query, 2);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora2(){
    $query = "SELECT * FROM v_gest_ejec_hora";
    return getJsonData($query, 2);
}

function getTablaTGDiarioTotal2(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 2);
};

function getTablaTGDiarioSumTotal2(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 2);
}

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

// Abcdin
//funciones gestiones Abcdin
function getGestionesEjecutivosHora9() {
    $query = "SELECT * FROM v_grx_gestionejehora order by 1";
    echo getJsonData($query, 9);
}

function getTipoGestionesEjecutivos9() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales order by 1";
    echo getJsonData($query, 9);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora9(){
    $query = "SELECT * FROM v_gest_ejec_hora";
    return getJsonData($query, 9);
}

function getTablaTGDiarioTotal9(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 9);
};

function getTablaTGDiarioSumTotal9(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario";
    return getJsonData($query, 9);
};
