<?php

namespace common\models;

use Yii;

class Uniqueness extends \yii\db\ActiveRecord
{
    public static function TableName(){
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