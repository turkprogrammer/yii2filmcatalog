<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $actor->fullname;
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">

    <div class="col-md-2 ">
        <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 


    </div>
    <div class="col-md-6" >
        <div class="container" >

            <h2><?= $actor->fullname ?></h2>
            <p>an   <b> Actor</b></p>

        </div>
        <hr>
        <ul class="container details" >
            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>i.rudberg</p></li>
            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>somerandom@email.com</p></li>
        </ul>
        <hr>

    </div>
    <hr/>

</div>

<div class="col-md-10">
<h4><span class="label label-warning">Связанные фильмы актера:</span></h4>
 <br/>
    <ul class="tag">
        <?php foreach ($films as $film) : ?>
            <li><a href="<?= \yii\helpers\Url::to(['film/view', 'id' => $film['film_id']]) ?>"><?= $film['title'] ?></a></li>
        <?php endforeach; ?> 
    </ul>
</div>




