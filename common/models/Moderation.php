<?php

namespace common\models;

use Yii;

class Moderation
{
    public static function Moderation(){
        return '{{moderation}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Name'], 'string', 'max' => 30],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'Name' => 'Название',
        ];
    }
}