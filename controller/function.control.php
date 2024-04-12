<?php

$compNames = getCompNames($db);

if (isset($_GET["comp"])) {
    $allInfo = getAllInfo($db, $_GET["comp"]);
}