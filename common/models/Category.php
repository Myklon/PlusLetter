<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

class Category extends \yii\db\ActiveRecord
{
    public static function TableName(){
        return '{{category}}';
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

    public static function getAllCategory_ListArray()
    {
        return ArrayHelper::map(Category::find()->OrderBy(['Sort'=>SORT_DESC])->asArray()->all(),'ID','Name');
    }
}