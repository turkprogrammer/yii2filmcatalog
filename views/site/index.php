<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
$this->title = 'YII2 App Movie Catalog';
?>


<?php foreach ($films as $film) : ?>
<div class="col-md-6 col-sm-6">
    <div class="single-blog mb-60">
        <div class="blog-img">
            <a href="<?= \yii\helpers\Url::to(['film/view', 'id' => $film['film_id']]) ?>"><img src="../../web/img/blog/1.jpg" alt=""/></a>
            
        </div>
        <div class="post-info">
            <span class="post-author">
                <i class="fa fa-user" aria-hidden="true"></i>
                <a href="/">jams</a>
            </span>
            <span class="post-author">
                <i class="fa fa-calendar"></i><?= $film->last_update ?>
            </span>
            <span class="post-author">
                <i class="icofont icofont-comment"></i>0
            </span>
        </div>
        <div class="post-content">
            <h2 class="semi-title">
                <a href="<?= \yii\helpers\Url::to(['film/view', 'id' => $film['film_id']]) ?>"><?= $film->title ?></a> </h2>
         
            
            <span class="label label-info"><?=$film['special_features']?></span> <i class="fa fa-star-half-o" aria-hidden="true"></i><?=$film['rental_rate']?>
        
            
            <p><?= $film->description ?></p>
            <a href="<?= \yii\helpers\Url::to(['film/view', 'id' => $film['film_id']]) ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<?php endforeach; ?> 
<?= yii\widgets\LinkPager::widget(['pagination' => $pages]); ?>


