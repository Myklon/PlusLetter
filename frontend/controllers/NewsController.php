<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\News;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $list_news = News::find()->asArray()->all();
        return $this->render('index',['list' => $list_news,]);
    }


}