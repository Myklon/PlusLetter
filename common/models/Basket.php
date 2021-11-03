<?php

namespace common\models;

use Yii;

class Basket
{
    public static function Basket(){
        return '{{basket}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['IDorder'], 'integer'],
            [['IDproduct'], 'integer'],
            [['IDuser'], 'integer'],
            [['Price'], 'float'],
            [['Once_price'], 'float'],
            [['Amount'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'IDorder' => 'Заказ',
            'IDproduct' => 'Продукт',
            'IDuser' => 'Пользователь',
            'Price' => 'Цена',
            'Once_price' => 'Цена за штуку',
            'Amount' => 'Количество',
        ];
    }
}