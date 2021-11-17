<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

class Product_mailingservices extends \yii\db\ActiveRecord
{
    public static function TableName(){
        return '{{product_mailingservices}}';
    }

    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['IDproduct'], 'integer'],
            [['IDmailingservices'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'IDproduct' => 'Продукт',
            'IDmailingservices' => 'Почтовый сервис',
        ];
    }

    public static function setProduct_mailingservices($id_product, $relations__list)
    {
        Product_mailingservices::deleteAll(['IDproduct'=>$id_product]);
        if($relations__list)
        {
            foreach ($relations__list as $id => $status) {
                $model_relations = new Product_mailingservices();
                $model_relations->IDmailingservices = $id;
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

    public static function getAllProduct_mailingservices($id_product)
    {
        return ArrayHelper::map(Product_mailingservices::find()->where(['IDproduct'=>$id_product])->asArray()->all(),'IDmailingservices','IDmailingservices');
    }
}