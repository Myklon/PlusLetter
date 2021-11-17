<?php
namespace backend\controllers;

use common\models\MailingServices;
use common\models\MailSystems;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;

/**
 * Site controller
 */
class MailSystemsController extends Controller
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
		$query = MailSystems::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'Sort' => SORT_DESC,
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
        $model = MailSystems::findOne($id);

        if($model->load(Yii::$app->request->post()) and $model->save())
		{
            return $this->redirect(['mail-systems/index']);
        }
        return $this->render('update',
			[
				'model'=>$model,
			]
		);
    }
	
    public function actionDelete($id)
    {
        $model = MailSystems::findOne($id);
		$model->delete();
        return $this->redirect(['mail-systems/index']);
    }

    public function actionCreate()
    {
        $model = new MailSystems();
        if($model->load(Yii::$app->request->post()) and $model->save())
		{
            return $this->redirect(['mail-systems/index']);
        }
		else
		{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
}
