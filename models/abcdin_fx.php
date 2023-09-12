<?php
require_once __DIR__ . '/../controllers/common.php';


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

function getTablaEjecHoraXCampana($nom_campana){
    $query = "SELECT a1.ejecutivo,
    a1.c_9,
    a1.c_10,
    a1.c_11,
    a1.c_12,
    a1.c_13,
    a1.c_14,
    a1.c_15,
    a1.c_16,
    a1.c_17,
    a1.c_18,
    a1.c_19,
    a1.c_9 + a1.c_10 + a1.c_11 + a1.c_12 + a1.c_13 + a1.c_14 + a1.c_15 + a1.c_16 + a1.c_17 + a1.c_18 + a1.c_19 AS total
   FROM ( SELECT initcap(split_part(gestiones.ejecutivo::text, '-'::text, 2)) AS ejecutivo,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 9 THEN 1
                    ELSE 0
                END) AS c_9,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 10 THEN 1
                    ELSE 0
                END) AS c_10,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 11 THEN 1
                    ELSE 0
                END) AS c_11,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 12 THEN 1
                    ELSE 0
                END) AS c_12,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 13 THEN 1
                    ELSE 0
                END) AS c_13,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 14 THEN 1
                    ELSE 0
                END) AS c_14,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 15 THEN 1
                    ELSE 0
                END) AS c_15,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 16 THEN 1
                    ELSE 0
                END) AS c_16,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 17 THEN 1
                    ELSE 0
                END) AS c_17,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 18 THEN 1
                    ELSE 0
                END) AS c_18,
            sum(
                CASE
                    WHEN to_char(gestiones.fecha_gestion, 'HH24'::text)::integer = 19 THEN 1
                    ELSE 0
                END) AS c_19
           FROM gestiones
          WHERE gestiones.fecha_gestion >= CURRENT_DATE::timestamp without time zone 
          AND gestiones.fecha_gestion <= ((CURRENT_DATE || ' 23:59:59'::text)::timestamp without time zone) 
          AND gestiones.medio_contacto::text = 'TELEFONICO'::text AND gestiones.ejecutivo::text <> '200-SUPERVISOR'::TEXT 
          AND gestiones.campana = '$nom_campana'
          GROUP BY gestiones.ejecutivo) a1
  ORDER BY a1.ejecutivo;";
  return getJsonData($query,9);
}



// Funcion que consulta la vista con los valores de las tarjetas y retorna un ARRAY para asignarlo en la vista
function getCardsData() {
    $query = "SELECT * FROM v_cards_test";
    
    $json_resp = getJsonData($query, 9);
    
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
