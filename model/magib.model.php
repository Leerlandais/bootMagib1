<?php

function getAllInfo(PDO $db, $compName) {
    var_dump($compName);
}

function getCompNames(PDO $db) : array | string {

    $sql = "SELECT nom_comp 
            FROM company
            ORDER BY nom_comp ASC";
try{
        $query = $db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
}catch(Exception){
    $result = "Sorry, couldn't get company names";
    return $result;
}
}