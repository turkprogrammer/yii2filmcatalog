

<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
$this->title = 'Все Фильмы';
$this->params['breadcrumbs'][] = $this->title;
?>



<?php foreach ($films as $film) : ?>

<div class="col-md-4 grid-item cat1 col-sm-4">
    <div class="single-portfolio">
        <div class="portfolio">

            <img src="../../web/img/portfolio/1.jpg" alt=""/>
        </div>
        <div class="portfolio-icon">
            <a class="image-link" href="img/portfolio/1.jpg"><span class="icon-focus"></span></a>
        </div>
        <div class="portfolio-title">
            <h2><a href="<?= \yii\helpers\Url::to(['film/view', 'id' => $film['film_id']]) ?>"><?= $film['title'] ?></a></h2>
            <span><?= $film ['description'] ?></span>
        </div>
    </div>
</div>
<?php endforeach; ?> 