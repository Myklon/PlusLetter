<?php
namespace common\models;

use Yii;

class Product extends \yii\db\ActiveRecord
{
    public $country;

    public static function TableName()
    {
        return '{{yii_product}}';
    }

    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
            [['active'], 'integer'],
            [['country'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'active' => 'Стостояние_активности',
        ];
    }
}