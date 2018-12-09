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

    public function actionView() {
        $id = \Yii ::$app->request->get('id');
        $actor = Actors::findOne($id);
        if (empty($actor)) {
            throw new \yii\web\HttpException(404, 'Mazafaka'); // если пост удален то выбрасываем исключение 404
        }
        
        $films = Yii::$app->db->createCommand('select * from film,film_actor where film.film_id=film_actor.film_id and film_actor.actor_id='.$id)->queryAll();
        
        // $this->setMeta($film->title, $film->keywords, $film->description);

        return $this->render('view', compact('actor','films'));
    }

}
