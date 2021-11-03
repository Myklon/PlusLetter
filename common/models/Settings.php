<?php

namespace common\models;

use Yii;

class Settings
{
    public static function Settings(){
        return '{{settings}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Name'], 'string', 'max' => 20],
            [['Description'], 'stream'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'Name' => 'Название',
            'Description' => 'Описание',
        ];
    }
}