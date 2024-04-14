<?php

session_start();

if(!isset($_SESSION['monID']) || 
    $_SESSION['monID']!== session_id())
    {
        header("location: ?p=login");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>

<?php
        include('inc/header.inc.php');
        $compCount = count($compNames) + 1;
        if(isset($errorMessage)) {
            echo $errorMessage;
        }
        ?>
    <a href="./">Retour</a>
    
    <div class="container h-auto">
        <section class="border border-secondary rounded-pill shadow h-50 p-3 my-2 d-flex flex-column align-items-center">
   
                <h3 class="text-warning fs-2 m-0">Add Company Name</h3>
               
            <form action="" method="POST" class="pt-0" id="addForm">
                <input type="text" name="idForNew" value="<?=$compCount?>"  class="d-none">
                <input type="text" name="addedBy" value="<?=$_SESSION["name"]?>"  class="d-none">
                <input type="text" name="compSlug" id="compSlugger" value="<?=$compCount?>"  class="d-none">
                <label for="compName"></label>
                    <input type="text" name="compName" id="compNameInp" class="w-100">
                    <h3 class="text-primary fs-5">And Income Per Month</h3>
                    <div class="d-flex flex-row">
                   <div class="d-flex flex-column w-50 align-items-center me-4">
                    <label for="inc_jan">Jan</label>
                    <input type="text" name="inc_jan" class="myInput">
                    <label for="inc_feb">Fev</label>
                    <input type="text" name="inc_feb" class="myInput">
                    <label for="inc_mar">Mars</label>
                    <input type="text" name="inc_mar" class="myInput">
                    <label for="inc_apr">Avr</label>
                    <input type="text" name="inc_apr" class="myInput">
                    <label for="inc_may">Mai</label>
                    <input type="text" name="inc_may" class="myInput">
                    <label for="inc_jun">Jun</label>
                    <input type="text" name="inc_jun" class="myInput">
                    </div>     
                    
                    <div class="d-flex flex-column w-50 align-items-center ms-4">
                    <label for="inc_jul">Jul</label>
                    <input type="text" name="inc_jul" class="myInput">
                    <label for="inc_aug">Aout</label>
                    <input type="text" name="inc_aug" class="myInput">
                    <label for="inc_sep">Sep</label>
                    <input type="text" name="inc_sep" class="myInput">
                    <label for="inc_oct">Oct</label>
                    <input type="text" name="inc_oct" class="myInput">
                    <label for="inc_nov">Nov</label>
                    <input type="text" name="inc_nov" class="myInput">
                    <label for="inc_dec">Déc</label>
                    <input type="text" name="inc_dec" class="myInput">
                </div>
            </div>
            <button type="submit" id="subButton">Add</button>
            </form>
        </section>
    </div> <!-- end container section -->    


            
            <h6 id="screenwidth"></h6>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="scripts/add.script.js"></script>
</body>
</html>

