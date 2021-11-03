<?php

namespace common\models;

use Yii;

class Product
{
    public static function Product(){
        return '{{product}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['ImagePreview'], 'string', 'max' => 255],
            [['CardImagePreview'], 'string', 'max' => 255],
            [['PreviewPC'], 'string', 'max' => 255],
            [['PreviewMobile'], 'string', 'max' => 255],
            [['Images'], 'string', 'max' => 255],
            [['Description'], 'stream'],
            [['Price'], 'float'],
            [['Adaptive'], 'integer'],
            [['IDlicense'], 'integer'],
            [['IDuniqueness'], 'integer'],
            [['SampleArchive'], 'string', 'max' => 255],
            [['IDmoderation'], 'integer'],
            [['Active'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'Name' => 'Название',
            'ImagePreview' => 'Изображение превью',
            'CardImagePreview' => 'Карточка товара',
            'PreviewPC' => 'Превью для ПК',
            'PreviewMobile' => 'Превью для телефона',
            'Images' => 'Изображения',
            'Description' => 'Описание',
            'Price' => 'Цена',
            'Adaptive' => 'Адаптивное',
            'IDlicense' => 'Лицензия',
            'IDuniqueness' => 'Уникальность',
            'SampleArchive' => 'Архив',
            'IDmoderation' => 'Модерация',
            'Active' => 'Активное',
        ];
    }
}