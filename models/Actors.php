<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property int $actor_id
 * @property string $fullname
 * @property string $last_update
 */
class Actors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname'], 'required'],
            [['last_update'], 'safe'],
            [['fullname'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'actor_id' => 'Actor ID',
            'fullname' => 'Fullname',
            'last_update' => 'Last Update',
        ];
    }
}
