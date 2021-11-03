<?php

namespace common\models;

use Yii;

class Access
{
    public static function Access(){
        return '{{access}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Name'], 'string', 'max' => 20],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'Name' => 'Название',
        ];
    }
}