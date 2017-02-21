<?php
namespace riiitor\seo\models;

use yii\db\ActiveRecord;

class Seo extends ActiveRecord {

    public static function tableName() {
        return 'seo';
    }

    public function rules() {
        return [
            [['model_class', 'model_id'], 'required'],
            [['model_id'], 'integer'],
            [['description'], 'string'],
            [['model_class', 'title', 'keywords', 'title', 'keywords', 'description'], 'trim'],
            [['model_class', 'title', 'keywords', 'title', 'keywords', 'description'], 'string', 'max' => 255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model_class' => 'Класс модели',
            'model_id' => 'ID модели',
            'title' => 'Тег title',
            'keywords' => 'Тег keywords',
            'description' => 'Тег description',
        ];
    }
}