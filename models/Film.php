<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property int $film_id
 * @property string $title
 * @property string $description
 * @property string $release_year
 * @property int $rental_duration
 * @property string $rental_rate
 * @property int $length
 * @property string $replacement_cost
 * @property string $rating
 * @property string $special_features
 * @property string $last_update
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film';
    }
    
 
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description', 'rating', 'special_features'], 'string'],
            [['release_year', 'last_update'], 'safe'],
            [['rental_duration', 'length'], 'integer'],
            [['rental_rate', 'replacement_cost'], 'number'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'film_id' => 'Film ID',
            'title' => 'Title',
            'description' => 'Description',
            'release_year' => 'Release Year',
            'rental_duration' => 'Rental Duration',
            'rental_rate' => 'Rental Rate',
            'length' => 'Length',
            'replacement_cost' => 'Replacement Cost',
            'rating' => 'Rating',
            'special_features' => 'Special Features',
            'last_update' => 'Last Update',
        ];
    }
}
