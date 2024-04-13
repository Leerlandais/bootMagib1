<div class="container h-50 border border-primary">
   <?php
foreach ($allInfo as $info) {
    ?>
   <h3><?=$info["nom"]?></h3>
<?php
}

include("table.inc.php");
?>


      </div> <!-- end container carousel -->