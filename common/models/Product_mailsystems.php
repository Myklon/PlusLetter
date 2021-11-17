<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

class Product_mailsystems extends \yii\db\ActiveRecord
{
    public static function TableName(){
        return '{{product_mailsystems}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['IDproduct'], 'integer'],
            [['IDmailsystems'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'IDproduct' => 'Продукт',
            'IDmailsystems' => 'Почтовая система',
        ];
    }
    public static function setProduct_mailsystems($id_product, $relations__list)
    {
        Product_mailsystems::deleteAll(['IDproduct'=>$id_product]);
        if($relations__list)
        {
            foreach ($relations__list as $id => $status) {
                $model_relations = new Product_mailsystems();
                $model_relations->IDmailsystems = $id;
                $model_relations->IDproduct = $id_product;
                if (!$model_relations->save()) {
                    print_r($model_relations->getErrors());
                    exit;
                }
            }
            return true;
        }
        return true;
    }

    public static function getAllProduct_mailsystems($id_product)
    {
        return ArrayHelper::map(Product_mailsystems::find()->where(['IDproduct'=>$id_product])->asArray()->all(),'IDmailsystems','IDmailsystems');
    }
}