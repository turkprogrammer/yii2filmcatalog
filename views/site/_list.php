<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\HtmlPurifier;
?>


<dl>
    <dt><?= Html::a(Html::encode($model->title), Url::toRoute(['film/view', 'id' => $model->film_id]), ['title' => $model->title]) ?></dt>
    <dd><?= Html::encode($model->description); ?></dd>
</dl>