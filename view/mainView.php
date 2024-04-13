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
        ?>

    
    <div class="container h-auto">
        <section class="border border-secondary rounded-pill shadow h-50 p-3 my-2">
            <div class="row">
                <div class="col">
                <h3 class="text-warning fs-5">Click a company to see their income</h3>
                    <ul class="list-group d-flex flex-row justify-content-center">
                <?php
        foreach($compNames as $names) {
?>
                       <a href="?comp=<?=$names["slug"]?>"><li class="list-group-item bg-transparent border-0"><?=$names["nom"]?></li></a> 
<?php
}
?>

                        <a href="?comp=all"><li class="list-group-item bg-transparent border-0">All</li></a>
                    </ul>
                </div>
            </div>
        </section>
    </div> <!-- end container section -->    

    <?php
        if (isset($_GET["comp"]) && $_GET["comp"] === "all") {
            include("inc/carousel.inc.php");
        }else if (isset($_GET["comp"]) && $_GET["comp"] != "all") {
            include("inc/single.inc.php");
        }else {
        ?>
        <div class="container h-50 border border-primary">

    <?php
}
        ?>

      <?php
        include("inc/footer.inc.php");
        ?>
            
            <h6 id="screenwidth"></h6>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="scripts/script.js"></script>
</body>
</html>







