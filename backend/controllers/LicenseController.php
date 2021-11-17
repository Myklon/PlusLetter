<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\License;
use yii\data\ActiveDataProvider;

/**
 * Site controller
 */
class LicenseController extends Controller
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
		$query = License::find();

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
			]
		);
    }
	
    public function actionUpdate($id)
    {
        $model = License::findOne($id);

        if($model->load(Yii::$app->request->post()) and $model->save())
		{
            return $this->redirect(['license/index']);
        }
        return $this->render('update',
			[
				'model'=>$model,
			]
		);
    }
	
    public function actionDelete($id)
    {
        $model = License::findOne($id);
		$model->delete();
        return $this->redirect(['license/index']);
    }

    public function actionCreate()
    {
        $model = new License();
        if($model->load(Yii::$app->request->post()) and $model->save())
		{
            return $this->redirect(['license/index']);
        }
		else
		{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
}
