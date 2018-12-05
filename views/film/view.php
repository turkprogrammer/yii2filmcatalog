<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $film->title;
$this->params['breadcrumbs'][] = $film->title;
?>

<h2><?= $this->title; ?></h2>
<table class="table table-dark">
   <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Дата выхода</th>
      <th scope="col">Продолжительность</th>
      <th scope="col">Рэйтинг фильма</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?= $film->release_year; ?></td>
      <td><?= $film->length; ?></td>
      <td><?= $film->rating; ?></td>
    </tr>
   
    
  </tbody>
</table>
<p>
    <?= $film->description; ?>
</p>

</br>
<span class="label label-info"><?= $film->last_update ?></span>

