<?php

$compNames = getCompNames($db);

if (isset($_GET["comp"])) {
    if($_GET["comp"] === "all") {
    $allInfo = getAllInfoForAll($db);
}else {
    $allInfo = getAllInfoForOne($db, $_GET["comp"]);
}
}