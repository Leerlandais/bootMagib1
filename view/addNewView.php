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
        ?>
    <a href="./">Retour</a>
    
    <div class="container h-auto">
        <section class="border border-secondary rounded-pill shadow h-50 p-3 my-2 d-flex flex-column align-items-center">
   
                <h3 class="text-warning fs-2 m-0">Add Company Name</h3>
               
            <form action="" method="POST" class="pt-0">
                <input type="text" name="idForNew" id="" value="<?=$compCount?>"  class="d-none">
                <label for="compName"></label>
                    <input type="text" name="compName" id="" class="w-100">
                    <h3 class="text-primary fs-5">And Income Per Month</h3>
                    <div class="d-flex flex-row">
                   <div class="d-flex flex-column w-50 align-items-center me-4">
                    <label for="incomeJan">Jan</label>
                    <input type="text" name="incomeJan" id="">
                    <label for="incomeFeb">Fev</label>
                    <input type="text" name="incomeFeb" id="">
                    <label for="incomeMar">Mars</label>
                    <input type="text" name="incomeMar" id="">
                    <label for="incomeApr">Avr</label>
                    <input type="text" name="incomeApr" id="">
                    <label for="incomeMay">Mai</label>
                    <input type="text" name="incomeMay" id="">
                    <label for="incomeJun">Jun</label>
                    <input type="text" name="incomeJun" id="">
                    </div>     
                    
                    <div class="d-flex flex-column w-50 align-items-center ms-4">
                    <label for="incomeJul">Jul</label>
                    <input type="text" name="incomeJul" id="">
                    <label for="incomeAug">Aout</label>
                    <input type="text" name="incomeAug" id="">
                    <label for="incomeSep">Sep</label>
                    <input type="text" name="incomeSep" id="">
                    <label for="incomeOct">Oct</label>
                    <input type="text" name="incomeOct" id="">
                    <label for="incomeNov">Nov</label>
                    <input type="text" name="incomeNov" id="">
                    <label for="incomeDec">Déc</label>
                    <input type="text" name="incomeDec" id="">
                </div>
            </div>
            <button type="submit">Add</button>
            </form>
        </section>
    </div> <!-- end container section -->    


            
            <h6 id="screenwidth"></h6>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="scripts/script.js"></script>
</body>
</html>

