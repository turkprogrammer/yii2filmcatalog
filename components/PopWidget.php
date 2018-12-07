<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;
use yii\base\Widget;

/**
 * Description of PopWidget
 *
 * @author Юнус
 */
class PopWidget extends Widget{
    //put your code here
    public function run() {
        $html = \Yii::$app->cache->get('popFilm'); // кешируем запрос по ключу
        if ($html == NULL) {
            $popfilm = \app\models\Film::find()->asArray()->orderBy('RAND()')->limit(4)->all(); // если кеш пустой то выполняем запрос и ложим его в кеш
           
            $html = $this->render('pop', compact('popfilm'));
            \Yii::$app->cache->set('popFilm', $html, 15);
        }

        return $html;
    }

}
