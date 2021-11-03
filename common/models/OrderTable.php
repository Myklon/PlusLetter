<?php

namespace common\models;

use Yii;

class OrderTable
{
    public static function OrderTable(){
        return '{{ordertable}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['IDuser'], 'integer'],
            [['FullPrice'], 'float'],
            [['Date'], 'Datetime'],
            [['Status'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'IDuser' => 'Пользователь',
            'FullPrice' => 'Итоговая цена',
            'Date' => 'Дата',
            'Status' => 'Статус',
        ];
    }
}