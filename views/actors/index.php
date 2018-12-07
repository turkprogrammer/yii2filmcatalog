<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

$this->title = 'Каталог актеров';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php foreach ($actors as $actor) : ?>
<div class="col-md-6">
<div class="testimonial-wrapper">
    <div class="test-img text-center">
        <a href="<?= \yii\helpers\Url::to(['actors/view', 'id' => $actor['actor_id']]) ?>">"><img src="../../img/testimonial/2.jpg" alt="" /></a>
    </div>
    <div class="test-content text-center">
        <h3><?=$actor->fullname ?></h3>
        <span>Actor/Actrees</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
</div>
</div>
<?php endforeach; ?> 
<?= yii\widgets\LinkPager::widget(['pagination' => $pages]); ?>