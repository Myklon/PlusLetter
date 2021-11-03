<?php

namespace common\models;

use Yii;

class Category
{
    public static function Category(){
        return '{{сategory}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Name'], 'string', 'max' => 30],
            [['Sort'], 'integer'],
            [['Active'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'Name' => 'Название',
            'Sort' => 'Порядок',
            'Active' => 'Активное',
        ];
    }
}