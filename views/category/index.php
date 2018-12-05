<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>



<?php if (!empty($cats)) : ?>

    <?php foreach ($cats as $cat) : ?>
        <div class="col-md-4 col-sm-4">
            <div class="single-service mb-30 gray-bg">
                <div class="service-icon">
                    <i class="fa fa-film" aria-hidden="true"></i>
                </div>
                <div class="service-text">
                    <div><h3><a href="<?= yii\helpers\Url::to(['category/view', 'id' => $cat['category_id']]) ?>"><?= $cat['name'] ?> </h3></div>
                    <p>Uaerat litora, taciti quaerat dolor ligula laoreet omnis aut scelerisque ex fuga platea eveniet pulvinar praesent</p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>			