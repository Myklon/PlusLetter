<?php

namespace common\models;

use Yii;

class Uniqueness
{
    public static function Uniqueness(){
        return '{{uniqueness}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Name'], 'string', 'max' => 20],
            [['Percent'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'Name' => 'Название',
            'Percent' => 'Процент',
        ];
    }
}