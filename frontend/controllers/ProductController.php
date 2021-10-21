<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Product;


class ProductController extends Controller
{
    public function actionIndex()
    {
        $model_product = new Product();
        $list_country = ['Украина','США','Китай'];
        return $this->render('index',['model' => $model_product,'country' => $list_country]);
    }

    public function actionGetParamsForm()
    {
        $model_product = new Product();
        if(Yii::$app->request->isPost)
        {
           if ($post = Yii::$app->request->post('Product')){

           }
           if($model_product -> load(Yii::$app->request->post())){
               echo '<br>'.$model_product -> name.'<br>';
               echo '<br>'.$model_product -> country.'<br>';
               print_r($model_product);
           }
        }
        exit;
    }
}
