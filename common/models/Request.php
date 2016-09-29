<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $brand
 * @property string $model
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required', 'message' => 'Не заполнено поле'],
            [['name', 'brand', 'model'], 'string', 'max' => 255],
            [['phone'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'brand' => 'Марка',
            'model' => 'Модель',
        ];
    }
}
