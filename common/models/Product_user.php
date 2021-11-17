<?php

namespace common\models;

use Yii;

class Product_user extends \yii\db\ActiveRecord
{
    public static function TableName(){
        return '{{product_user}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['IDproduct'], 'integer'],
            [['IDuser'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'IDproduct' => 'Продукт',
            'IDuser' => 'Пользователь',
        ];
    }
}