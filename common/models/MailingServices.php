<?php

namespace common\models;

use Yii;

class MailingServices
{
    public static function MailingServices(){
        return '{{mailingservices}}';
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