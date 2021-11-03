<?php

namespace common\models;

use Yii;

class Product_mailsystems
{
    public static function Product_mailsystems(){
        return '{{product_mailsystems}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['IDproduct'], 'integer'],
            [['IDmailsystems'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'IDproduct' => 'Продукт',
            'IDmailsystems' => 'Почтовая система',
        ];
    }
}