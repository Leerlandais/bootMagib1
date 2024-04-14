<?php
// if I need other pages, they'll be routed through here but for the moment, I don't need any other page

if (isset($_GET["p"])) {
    switch($_GET['p']) {
        case 'home' :
            $title = 'Bienvenu à mon experience';
            include ("../view/mainView.php");
            break;
        case "addNew" :
            $title = "Add a New Company";
            include ("../view/addNewView.php");
            break;
        case 'login' :
            $title = "Log In Here";
            include ("../view/login.php");
            break;
        case "unlog" :
            include ("../controller/unlog.control.php");
            break;
        default :
        $title = "Page Not Found";
        include("../view/error404.php");
    }
}else {   
    $title = 'Bienvenu à mon experience';
    include ("../view/mainView.php");
}
    
