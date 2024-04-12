<?php
require_once "../config.php";
require_once "../model/magib.model.php";

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}    

$compNames = getCompNames($db);


if (isset($_GET["comp"])) {
    $allInfo = getAllInfo($db, $_GET["comp"]);
}










$db = null;
include "../view/mainView.php";