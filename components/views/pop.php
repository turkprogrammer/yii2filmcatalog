
<?php

use app\models\Film;
?>


<?php if (!empty($popfilm)) : ?>

 <?php foreach ($popfilm as $pop) : ?>
<div class="col-md-6">
    <div class="single-portfolio">
        <div class="portfolio">

            <img src="../../web/img/portfolio/1.jpg" alt=""/>
        </div>
        <div class="portfolio-icon">
            <a class="image-link" href="img/portfolio/1.jpg"><span class="icon-focus"></span></a>
        </div>
        <div class="portfolio-title">
            <h4><a href="<?= \yii\helpers\Url::to(['film/view', 'id' => $pop['film_id']]) ?>"><?= $pop['title'] ?></a></h4>
            <span><?//= $pop ['description'] ?></span><span><?= $pop ['rental_rate'] ?></span>
        </div>
    </div>
</div>
  <?php endforeach; ?><?php endif; ?>