<?php

$compNames = getCompNames($db);

if (isset($_GET["comp"])) {
    if($_GET["comp"] === "all") {
    $allInfo = getAllInfoForAll($db);
}else {
    $allInfo = getAllInfoForOne($db, $_GET["comp"]);
}
}


if(isset($_POST["inc_jan"]) && 
    isset($_POST["inc_feb"]) && 
    isset($_POST["inc_mar"]) && 
    isset($_POST["inc_apr"]) && 
    isset($_POST["inc_may"]) && 
    isset($_POST["inc_jun"]) && 
    isset($_POST["inc_jul"]) && 
    isset($_POST["inc_aug"]) && 
    isset($_POST["inc_sep"]) && 
    isset($_POST["inc_oct"]) && 
    isset($_POST["inc_nov"]) &&
    isset($_POST["inc_dec"]) &&
    isset($_POST["idForNew"]) &&
    isset($_POST["compSlug"]) &&
    isset($_POST["addedBy"]) &&
    isset($_POST["compName"]))
    {
        foreach ($_POST as $input => $amount) {
            $cleanedInputs[$input] = htmlspecialchars(strip_tags(trim($amount)), ENT_QUOTES);
        }
        $addComp = addNewCompany($db, $cleanedInputs);
    }