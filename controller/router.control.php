<?php
// if I need other pages, they'll be routed through here but for the moment, I don't need any other page
$title = 'Bienvenu à mon experience';
include ("../view/mainView.php");

if (isset($_GET["comp"])) {
    getAllInfo($db, $_GET["comp"]);
}