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



function getAllInfoForOne(PDO $db, $compName) {
   $cleanedName = htmlspecialchars(strip_tags(trim($compName)), ENT_QUOTES);

   $sql = "SELECT `nom_comp` AS `nom`, `i`.*
   FROM `company` `c`
   JOIN `comp_has_inc` `h`
   ON `c`.`id_comp` = `h`.`has_comp`
   JOIN `income` `i`
   ON `h`.`has_inc` = `i`.`id_inc`
   WHERE `c`.`slug_comp` = ?";

   $stmt = $db->prepare($sql);
   $stmt->bindValue(1, $cleanedName);
   try {
    $stmt->execute();
       $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
} catch (PDOException $e) {
    $result = error_log("Error adding Artist: " . $e->getMessage());
    return $result;
}
}



function getAllInfoForAll(PDO $db) {

    $sql = "SELECT `nom_comp` AS `nom`, `i`.*
    FROM `company` `c`
    JOIN `comp_has_inc` `h`
    ON `c`.`id_comp` = `h`.`has_comp`
    JOIN `income` `i`
    ON `h`.`has_inc` = `i`.`id_inc`";

try{
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}catch(Exception){
    $result = "Sorry, couldn't get company info";
    return $result;
}
}