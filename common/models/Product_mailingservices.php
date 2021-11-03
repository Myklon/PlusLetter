<?php

namespace common\models;

use Yii;

class Product_mailingservices
{
    public static function Product_mailingservices(){
        return '{{product_mailingservices}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['IDproduct'], 'integer'],
            [['IDmailingservices'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'IDproduct' => 'Продукт',
            'IDmailingservices' => 'Почтовый сервис',
        ];
    }
}