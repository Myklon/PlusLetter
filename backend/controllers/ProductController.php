<?php
namespace backend\controllers;

use common\models\MailingServices;
use common\models\MailSystems;
use common\models\Product_mailingservices;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Product;
use common\models\Category;
use common\models\Product_category;
use common\models\Product_mailsystems;
use backend\models\SearchProduct;
use yii\data\ActiveDataProvider;

/**
 * Site controller
 */
class ProductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index','update', 'view', 'delete','create'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
		 $model = new SearchProduct();
		$query = Product::find();
		
		if($post = yii::$app->request->post('SearchProduct')) :
			$query = $model->search($post['Name']);
			$model->Name = $post['Name'];
		endif;
		
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'ID' => SORT_DESC,
                ]
            ],
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('index',
			[
				'dataProvider'=>$dataProvider,
				'model'=>$model
			]
		);
    }
	
    public function actionUpdate($id)
    {
        $model = Product::findOne($id);

        if($model->load(Yii::$app->request->post()) and $model->save())
		{
            $relations__category = Yii::$app->request->post('Product_category');
			Product_category::setProduct_category($id,$relations__category);
            $relations__mailingservices = Yii::$app->request->post('Product_mailingservices');
            Product_mailingservices::setProduct_mailingservices($id,$relations__mailingservices);
            $relations__mailsystems = Yii::$app->request->post('Product_mailsystems');
            Product_mailsystems::setProduct_mailsystems($id,$relations__mailsystems);

            return $this->redirect(['product/index']);
        }
        return $this->render('update',
			[
				'model'=>$model,
                'category_list'=>Category::getAllCategory_ListArray(),
				'category_list_active'=>Product_category::getAllProduct_category($id),
                'mailingservices_list'=>MailingServices::getAllMailingServices_ListArray(),
                'mailingservices_list_active'=>Product_mailingservices::getAllProduct_mailingservices($id),
                'mailsystems_list'=>MailSystems::getAllMailSystems_ListArray(),
                'mailsystems_list_active'=>Product_mailsystems::getAllProduct_mailsystems($id),
			]
		);
    }
	
    public function actionDelete($id)
    {
        $model = Product::findOne($id);
		$model->delete();
        return $this->redirect(['product/index']);
    }

    public function actionCreate()
    {
        $model = new Product();
        if($model->load(Yii::$app->request->post()) and $model->save())
		{
			$relations__category = Yii::$app->request->post('Product_category');
            Product_category::setProduct_category($model->id,$relations__category);
            $relations__mailingservices = Yii::$app->request->post('Product_mailingservices');
            Product_mailingservices::setProduct_mailingservices($model->id,$relations__mailingservices);
            $relations__mailsystems = Yii::$app->request->post('Product_mailsystems');
            Product_mailsystems::setProduct_mailsystems($model->id,$relations__mailsystems);
            return $this->redirect(['product/index']);
        }
		else
		{
            return $this->render('create', [
                'category_list'=>Category::getAllCategory_ListArray(),
                'mailingservices_list'=>MailingServices::getAllMailingServices_ListArray(),
                'mailsystems_list'=>MailSystems::getAllMailSystems_ListArray(),
                'model' => $model,
            ]);
        }
    }
}
