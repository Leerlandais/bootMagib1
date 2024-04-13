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
    ON `h`.`has_inc` = `i`.`id_inc`
    ORDER BY `c`.`nom_comp`";

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


function addNewCompany(PDO $db, $inputs) {
    foreach($inputs as $inp => $val)
    if($inp[1] === "n") {
     $newInp[$inp] = $val;
    }
    
    $sqlInc = "INSERT INTO `income`(`id_inc`, `inc_jan`, `inc_feb`, `inc_mar`, `inc_apr`, `inc_may`, `inc_jun`, `inc_jul`, `inc_aug`, `inc_sep`, `inc_oct`, `inc_nov`, `inc_dec`) 
                VALUES (NULL, :jan, :feb, :mar, :apr, :may, :jun, :jul, :aug, :sep, :oct, :nov, :decem)";


    $stmt = $db->prepare($sqlInc);
    $stmt->bindParam(':jan', $inputs["inc_jan"]);
    $stmt->bindParam(':feb', $inputs["inc_feb"]);
    $stmt->bindParam(':mar', $inputs["inc_mar"]);
    $stmt->bindParam(':apr', $inputs["inc_apr"]);
    $stmt->bindParam(':may', $inputs["inc_may"]);
    $stmt->bindParam(':jun', $inputs["inc_jun"]);
    $stmt->bindParam(':jul', $inputs["inc_jul"]);
    $stmt->bindParam(':aug', $inputs["inc_aug"]);
    $stmt->bindParam(':sep', $inputs["inc_sep"]);
    $stmt->bindParam(':oct', $inputs["inc_oct"]);
    $stmt->bindParam(':nov', $inputs["inc_nov"]);
    $stmt->bindParam(':decem', $inputs["inc_dec"]);

    $sqlHas = "INSERT INTO `comp_has_inc` (`has_comp`, `has_inc`)
                VALUES (:comp_id, :inc_id)";
    $stmtHas = $db->prepare($sqlHas);
    $stmtHas->bindParam(':comp_id', $inputs["idForNew"]);
    $stmtHas->bindParam(':inc_id', $inputs["idForNew"]);

    $sqlName = "INSERT INTO `company`(`id_comp`, `nom_comp`, `slug_comp`) 
                VALUES (NULL, :compName, :compSlug)";
    $stmtName = $db->prepare($sqlName);
    $stmtName->bindParam(':compName', $inputs["compName"]);
    $stmtName->bindParam(':compSlug', $inputs["compName"]);

    try {
        $stmt->execute();
        $stmtHas->execute();
        $stmtName->execute();
        $db->commit();
        return true;
    }catch(Exception){
        $result = "Sorry, couldn't add company income";
        return false;
    }
}