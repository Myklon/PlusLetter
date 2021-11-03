<?php

namespace common\models;

use Yii;

class License
{
    public static function License(){
        return '{{license}}';
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