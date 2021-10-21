<?php
namespace common\models;

use Yii;

class News extends \yii\db\ActiveRecord
{
    public static function News()
    {
        return 'news';
    }

    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
            [['text'], 'string'],
            [['all_text'], 'string', 'max' => 500],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'text' => 'Описание',
            'all_text' => 'Полный_текст',
        ];
    }
}