<?php

namespace app\controllers;

use Yii;
use app\models\Actors;

class ActorsController extends \yii\web\Controller {

    public function actionIndex() {
        
        $query = Actors::find();
        $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 10, 'pageSizeParam' => false, 'forcePageParam' => false]); //Пагинация, сичтаем общее колво записей и передаем в парамтр вывода лимит на страницу
        $actors = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('actors', 'pages'));

    }

}
