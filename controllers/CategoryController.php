<?php

namespace app\controllers;

use app\models\Category; //подключаем модель Категорий
use app\models\Film; // 
use app\models\FilmCategory;
use yii\helpers\ArrayHelper;
use yii\data\Pagination;
use Yii;

class CategoryController extends \yii\web\Controller {
    
    public function behaviors() {
        return [
            [
                'class' => 'yii\filters\PageCache',
                'only' => ['index'],
                'duration' => 60,
                'variations' => [
                    \Yii::$app->language,
                ],
                'dependency' => [
                    'class' => 'yii\caching\DbDependency',
                    'sql' => 'SELECT COUNT(*) FROM  category',
                ],
            ],
        ];
    }

    public function actionIndex() {
        $modelCategory = new Category();
        $cats = $modelCategory::find()->all();
        return $this->render('index', compact('cats'));
    }

    public function actionView($id) {

        $id = \Yii::$app->request->get('id');
        $category = Category::findOne($id);
        // print_r($category);die();
        //self::debug($category); //print this array

        if (empty($category)) {
            throw new \yii\web\HttpException(404, 'Show Must Go on....');
        }
        $films= Yii::$app->db->createCommand('SELECT * FROM film, film_category WHERE film.film_id = film_category.film_id and film_category.category_id=' . $id)->queryAll();
        $countFilms = Yii::$app->db->createCommand('SELECT COUNT(*) FROM film, film_category WHERE film.film_id = film_category.film_id and film_category.category_id=' . $id)->queryScalar();
        //$pages = new Pagination(['totalCount' => $count, 'pageSize' => 10, 'pageSizeParam' => false, 'forcePageParam' => false]); //Пагинация, сичтаем общее колво записей и передаем в парамтр вывода лимит на страницу
        return $this->render('view', compact('films', 'pages','category'));
 


        /* $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 10, 'pageSizeParam' => false, 'forcePageParam' => false]); //Пагинация, сичтаем общее колво записей и передаем в парамтр вывода лимит на страницу
          $films = $query->offset($pages->offset)->limit($pages->limit)->all(); */
        // return $this->render('index', compact('films'));
        /* $query = Film::find()->where('film.film_id = film_category.category_id and film_category.category_id=$id');
          $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 10, 'pageSizeParam' => false, 'forcePageParam' => false]); //Пагинация, сичтаем общее колво записей и передаем в парамтр вывода лимит на страницу
          $films = $query->offset($pages->offset)->limit($pages->limit)->all();
          return $this->render('index', compact('films', 'pages')); */
        // $query = "SELECT * FROM film, film_category WHERE film.film_id = film_category.film_id and film_category.category_id=$id";
        //  return $this->render('view', compact('films'));
    }

}
