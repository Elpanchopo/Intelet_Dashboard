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

// Funcion que consulta la vista con los valores de las tarjetas y retorna un ARRAY para asignarlo en la vista
function getCardsData() {
    $query = "SELECT * FROM v_cards_test";

    $json_resp = getJsonData($query, 5);
    
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
