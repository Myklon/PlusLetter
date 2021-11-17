<?php

namespace common\models;

use Yii;

class License extends \yii\db\ActiveRecord
{
    public static function TableName(){
        return '{{license}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Name'], 'string', 'max' => 30],
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