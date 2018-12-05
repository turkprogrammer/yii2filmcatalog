<?php

use app\models\Category;
?>


<?php if (!empty($cats)) : ?>

    <?php foreach ($cats as $cat) : ?>



        <a href="<?= yii\helpers\Url::to(['category/view', 'id' => $cat['category_id']]) ?>" class="list-group-item ">
            <h4 class="list-group-item-heading"><?= $cat['name'] ?></h4>

        </a>


    <?php endforeach; ?>

<?php endif; ?>


