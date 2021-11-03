<?php

namespace common\models;

use Yii;

class Product_user
{
    public static function Product_user(){
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