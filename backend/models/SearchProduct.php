<?php
namespace backend\models;

use common\models\Product;
use Yii;
use yii\helpers\ArrayHelper;

class SearchProduct extends Product
{
    public function search($name) 
	{
        $query = Product::find()->andWhere(['LIKE','Name',$name]);
		return $query;
    }
	
	public function searchArray($name) 
	{
        $query = ArrayHelper::map(Product::find()->andWhere(['LIKE','Name',$name])->asArray()->all(),'ID','ID');
		return $query;
    }
}