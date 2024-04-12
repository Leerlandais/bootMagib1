<?php


function getCompNames(PDO $db) : array | string {
    
    $sql = "SELECT nom_comp AS nom, slug_comp AS slug
            FROM company
            ORDER BY nom ASC";
try{
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}catch(Exception){
    $result = "Sorry, couldn't get company names";
    return $result;
}
}



function getAllInfo(PDO $db, $compName) {
    echo ($_GET["comp"]);
}