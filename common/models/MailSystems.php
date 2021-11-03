<?php

namespace common\models;

use Yii;

class MailSystems
{
    public static function MailSystems(){
        return '{{mailsystems}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Name'], 'string', 'max' => 30],
            [['Sort'], 'integer'],
            [['Active'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'Name' => 'Название',
            'Sort' => 'Порядок',
            'Active' => 'Активное',
        ];
    }
}