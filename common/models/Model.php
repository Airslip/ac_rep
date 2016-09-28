<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "model".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $photo
 * @property string $carcase_type
 * @property string $description
 * @property string $brand
 */
class Model extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'photo', 'carcase_type', 'description', 'brand'], 'required'],
            [['name', 'slug', 'photo', 'carcase_type', 'description', 'brand'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'photo' => 'Photo',
            'carcase_type' => 'Carcase Type',
            'description' => 'Description',
            'brand' => 'Brand',
        ];
    }
}
