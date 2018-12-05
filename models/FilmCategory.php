<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film_category".
 *
 * @property int $film_id
 * @property int $category_id
 */
class FilmCategory extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'film_category';
    }

   
  
    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['film_id', 'category_id'], 'required'],
            [['film_id', 'category_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'film_id' => 'Film ID',
            'category_id' => 'Category ID',
        ];
    }

}
