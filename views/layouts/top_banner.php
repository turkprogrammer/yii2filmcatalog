<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
use app\models\Film;
?>


<div class="col-md-12">
    <!-- <div class="thumbnail">
<a href="#"><img src="http://www.istanbluegayrimenkul.com/wp-content/uploads/2014/05/image6.jpg" alt=""/></a>
    
    
</div> -->
    <?php
    $film_id = 4;
    //запрос
    $model = Film::find()->where('film_id = :film_id', [':film_id' => $film_id])->one();
// вывод данных
    ?>


    <div class="icerik-bilgi">
        <a href="<?= \yii\helpers\Url::to(['film/view', 'id' => $model['film_id']]) ?>"><h2><?php echo $model->title; ?></h2></a>
        <p class="banner"> <?php echo $model->description; ?></p>
        <span class="small">В данном  YII2 приложении на текущий момент используется 6 таблиц (моделей) <code>actor</code>, <code>film</code>, <code>film_actor</code>, <code>film_category</code>, <code>category</code>. Используются связи таблиц <code>Категории</code> - <code>Фильмы</code>, <code>Актеры</code> - <code>Фильмы</code>. Реализован каталог Фильмов и Актеров, Поиск по фильмам. Планируется:админка (модуль), Пользователи, комментари к фильмам&nbsp;</p>
</span>
        <div class="btn-group">
            <a class="btn btn-social btn-facebook" href="#" data-toggle="tooltip" title="Share Facebook"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-social btn-twitter" href="#" data-toggle="tooltip" title="Share Twitter"><i class="fa fa-twitter"></i></a>
            <a class="btn btn-social btn-google" href="#" data-toggle="tooltip" title="Share Google"><i class="fa fa-google"></i></a>
        </div>
        <a href="<?= \yii\helpers\Url::to(['film/view', 'id' => $model['film_id']]) ?>">
            <button type="button" class="btn btn-primary">
                <span class="btn btn-google">Далее <i class="fa fa-chevron-right"></i></span>
            </button>
        </a>

    </div>

 
</div>