<?php

namespace common\models;

use Yii;

class Product2
{
    public static function TableX(){
        return '{{product}}';
    }

    public function rules(){
        return [
            [['Name'], 'varchar', 'max' => 15],
            [['Count'], 'integer'],
            [['Active'], 'tinyint'],
        ];
    }

    public function attributeLabels(){
        return [
            'id' => 'ID',
            'Name' => 'Название',
            'Active' => 'Стостояние_активности',
        ];
    }
}