<div class="container h-50 border border-primary">
    <div id="diaporama" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
<?php
$i = 0;
    foreach($allInfo as $info) {
        if ($i < 1) {
            $i++;
        ?>
          <div class="carousel-item active">
            <img src="1.jpg" alt="<?=$info["nom"]?>" class="d-block w-100" />
          </div>
          <?php
        }else {
            ?>
            <div class="carousel-item">
              <img src="1.jpg" alt="<?=$info["nom"]?>" class="d-block w-100" />
            </div>
            <?php
        }
          }
          ?>
        </div>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#diaporama" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </button>

        <button
          class="carousel-control-next" type="button" data-bs-target="#diaporama" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div> <!-- end container carousel -->