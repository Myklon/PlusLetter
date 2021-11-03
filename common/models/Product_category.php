<?php

namespace common\models;

use Yii;

class Product_category
{
    public static function Product_category(){
        return '{{product_category}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['IDproduct'], 'integer'],
            [['IDcategory'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'IDproduct' => 'Продукт',
            'IDcategory' => 'Категория',
        ];
    }
}