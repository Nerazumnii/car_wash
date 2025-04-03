<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car_wash".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property float|null $rating
 * @property string $work_hours
 * @property string|null $description
 */
class CarWash extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car_wash';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'default', 'value' => null],
            [['rating'], 'default', 'value' => 0.00],
            [['name', 'address', 'work_hours'], 'required'],
            [['rating'], 'number'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 512],
            [['work_hours'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название мойки',
            'address' => 'Адрес',
            'rating' => 'Рейтинг',
            'work_hours' => 'Часы работы',
            'description' => 'Описание',
        ];
    }

}
