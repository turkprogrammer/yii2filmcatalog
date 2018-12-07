<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film_actor".
 *
 * @property int $actor_id
 * @property int $film_id
 * @property int $priority
 */
class Film_Actors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'film_actor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['actor_id', 'film_id', 'priority'], 'required'],
            [['actor_id', 'film_id', 'priority'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'actor_id' => 'Actor ID',
            'film_id' => 'Film ID',
            'priority' => 'Priority',
        ];
    }
}
