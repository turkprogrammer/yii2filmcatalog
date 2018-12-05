<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Film;
use yii\web\NotFoundHttpException;

class FilmController extends Controller {

    public function actionIndex() {

        $query = Film::find();
        $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 10, 'pageSizeParam' => false, 'forcePageParam' => false]); //Пагинация, сичтаем общее колво записей и передаем в парамтр вывода лимит на страницу
        $films = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('films', 'pages'));
       
    }
    
    public function actionView() {
        $id = \Yii ::$app->request->get('id');
        $film = Film::findOne($id);
        if (empty($film)) {
             throw new \yii\web\HttpException(404, 'Mazafaka'); // если пост удален то выбрасываем исключение 404
        }
           
       
       // $this->setMeta($film->title, $film->keywords, $film->description);
        return $this->render('view', compact('film'));
    }

}
