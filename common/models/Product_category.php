<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

class Product_category extends \yii\db\ActiveRecord
{
    public static function TableName(){
        return '{{product_category}}';
    }
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['IDproduct'], 'integer'],
            [['IDcategory'], 'integer'],
        ];
    }

    public function attributeLabels(){
        return [
            'ID' => 'ID',
            'IDproduct' => 'Продукт',
            'IDcategory' => 'Категория',
        ];
    }

    public static function setProduct_category($id_product, $relations__list)
    {
        Product_category::deleteAll(['IDproduct'=>$id_product]);
        if($relations__list)
        {
            foreach ($relations__list as $id => $status) {
                $model_relations = new Product_category();
                $model_relations->IDcategory = $id;
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

    public static function getAllProduct_category($id_product)
    {
        return ArrayHelper::map(Product_category::find()->where(['IDproduct'=>$id_product])->asArray()->all(),'IDcategory','IDcategory');
    }

    public function getCategoryFrom_IDProduct($id_product)
    {
        $model_relations = Product_category::find()->where(['IDproduct'=>$id_product])->orderBy('rand()')->one();
        if($model_relations)
        {
            return Category::findOne($model_relations->IDcategory);
        }
        return false;
    }
}