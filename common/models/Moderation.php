<?php

namespace common\models;

use Yii;

class Moderation extends \yii\db\ActiveRecord
{
    public static function TableName(){
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