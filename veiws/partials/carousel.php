


<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
  <?php 
  foreach($slides as $key => $slide){ ?>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $key ?>" class="active" aria-current="true" aria-label="Slide 1"></button>
    <?php } ?>
  </div>
  

   <?php foreach($slides as $key => $slide){ ?>
    <div class="carousel-item <?=($key==0) ? 'active' : '';?>">
      <img src="<?php echo $slide['path']; ?>" class="d-block w-100" height="300" alt="<?php $slide['description']; ?>">
    </div>
    <?php }
  
    ?>


    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

