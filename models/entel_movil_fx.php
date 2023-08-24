<?php
require_once __DIR__ . '/../controllers/common.php';


// Entel
//funciones gestiones Entel
function getGestionesEjecutivosHora3() {
    $query = "SELECT * FROM v_grx_gestionejehora_movil order by 1";
    echo getJsonData($query, 3);
}

function getTipoGestionesEjecutivos3() {
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_totales_movil order by 1";
    echo getJsonData($query, 3);
}

//Funciones Tablas
function getTablaGestionesEjecutivosHora3(){
    $query = "SELECT * FROM v_gest_ejec_hora_movil";
    return getJsonData($query, 3);
}

function getTablaTGDiarioTotal3(){
    $query = "SELECT * FROM v_tabla_tipogestion_ejec_diario_movil";
    return getJsonData($query, 3);
};

function getTablaTGDiarioSumTotal3(){
    $query = "SELECT sum(ct) as ct, sum(te) as te, sum(nc) as nc, sum(cp) as cp, sum(total) as total from v_tabla_tipogestion_ejec_diario_movil";
    return getJsonData($query, 3);
}

// Funcion que consulta la vista con los valores de las tarjetas y retorna un ARRAY para asignarlo en la vista
function getCardsData() {
    $query = "SELECT * FROM v_cards_test_movil";

    $json_resp = getJsonData($query, 3);
    
    $keysToSearch = ['c1', 'c2', 'c3', 'c4'];
    $values = [];

    foreach ($keysToSearch as $key) {
        $startPos = strpos($json_resp, "\"$key\":");
        if ($startPos !== false) {
            $startPos += strlen("\"$key\":");
            $endPos = strpos($json_resp, ",", $startPos);
            if ($endPos === false) {
                $endPos = strpos($json_resp, "}", $startPos);
            }
            if ($endPos !== false) {
                $value = substr($json_resp, $startPos, $endPos - $startPos);
                $values[$key] = trim($value, "\" ");
            }
        }
    }

    return $values;
}