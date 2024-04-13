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
    <div class="container h-25">
        <header class="h-75 shadow border-end border-bottom border-dark-subtle border-2 rounded-4 mt-5">
            <div class="row">
                <div class="col">
                    <h1 class="text-primary text-decoration-underline fs-3 px-5 py-2">Bienvenue dans mon expérience avec Bootstrap, PHP, JavaScript, SQL et, bien sûr, un peu de HTML et CSS</h1>
                    <h2 class="text-info">&lpar;J'essaierai de faire la majorité du style avec BS&rpar;</h2>
                </div>
            </div>
        </header>
    </div> <!-- end container header -->
        
    
    <div class="container h-50">
        <main class="border border-danger h-75 p-3">
            <div class="row">
                <div class="col">
                <h3 class="text-warning fs-5">Click a company to see their income</h3>
                    <ul class="list-group">
                <?php
        foreach($compNames as $names) {
?>
                       <a href="?comp=<?=$names["slug"]?>"><li class="list-group-item bg-transparent border-0"><?=$names["nom"]?></li></a> 
<?php
}
?>
<?php
        if(isset($allInfo)){
            var_dump($allInfo);
        }
        ?>
                        <a href="?comp=all"><li class="list-group-item bg-transparent border-0">All</li></a>
                    </ul>
                </div>
            </div>
        </main>
    </div> <!-- end container main -->    
    
    
    <div class="container h-25 mt-3">
        <footer class="h-50 border-top border-start border-2 border-warning-subtle">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                <h4 class="text-warning fs-3">&lpar;Need a footer here&rpar;</h4>
                </div>
            </div>
        </footer>
    </div> <!-- end container footer -->         
            
            <h6 id="screenwidth"></h6>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="scripts/script.js"></script>
</body>
</html>





<?php
        
        ?>

<?php
        
        ?>

<?php
        
        ?>