<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="corres-form">
	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
		<div class='col-md-12'>
			<div class='col-md-6'>
				<div class='col-md-12'>
					<?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>
				</div>
				<div class='col-md-12'>
					<?= $form->field($model, 'ImagePreview')->textInput(['maxlength' => true]) ?>
				</div>
				<div class='col-md-12'>
					<?= $form->field($model, 'CardImagePreview')->textInput(['maxlength' => true]) ?>
				</div>
                <div class='col-md-12'>
                    <?= $form->field($model, 'PreviewPC')->textInput(['maxlength' => true]) ?>
                </div>
                <div class='col-md-12'>
                    <?= $form->field($model, 'PreviewMobile')->textInput(['maxlength' => true]) ?>
                </div>
                <div class='col-md-12'>
                    <?= $form->field($model, 'Images')->textInput(['maxlength' => true]) ?>
                </div>
                <div class='col-md-12'>
                    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>
                </div>
                <div class='col-md-12'>
                    <?= $form->field($model, 'Price')->textInput(['maxlength' => true]) ?>
                </div>
                <div class='col-md-12'>
                    <?= $form->field($model, 'Adaptive')->checkbox() ?>
                </div>
                <div class='col-md-12'>
                    <?= $form->field($model, 'SampleArchive')->textInput(['maxlength' => true]) ?>
                </div>
                <div class='col-md-12'>
                <?php
                        $license = \common\models\License::find()->all();
                        $items = ArrayHelper::map($license,'ID','Name');
                        $params = [

                        ];
                        echo $form->field($model, 'IDlicense')->dropDownList($items,$params);
                    ?>
                </div>
                <div class='col-md-12'>
                    <?php
                    $license = \common\models\Uniqueness::find()->all();
                    $items = ArrayHelper::map($license,'ID','Name');
                    $params = [

                    ];
                    echo $form->field($model, 'IDuniqueness')->dropDownList($items,$params);
                    ?>
                </div>
                <div class='col-md-12'>
                    <?php
                    $license = \common\models\Moderation::find()->all();
                    $items = ArrayHelper::map($license,'ID','Name');
                    $params = [

                    ];
                    echo $form->field($model, 'IDmoderation')->dropDownList($items,$params);
                    ?>
                </div>
				<div class='col-md-12'>
				<?= $form->field($model, 'Active')->checkbox() ?>
			</div>
			</div>
			<div class='col-md-6'>

				<div class='col-md-8'>
                    <?=$this->render('_get_category',['category_list'=>$category_list,'model'=>$model,'category_list_active'=>$category_list_active]);?>
				</div>
                <div class='col-md-8'>
                    <?=$this->render('_get_mailingservices',['mailingservices_list'=>$mailingservices_list,'model'=>$model,'mailingservices_list_active'=>$mailingservices_list_active]);?>
                </div>
                <div class='col-md-8'>
                    <?=$this->render('_get_mailsystems',['mailsystems_list'=>$mailsystems_list,'model'=>$model,'mailsystems_list_active'=>$mailsystems_list_active]);?>
                </div>
			</div>
		</div>
		<div class='col-md-12'>
			<div class="form-group">
				<?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			</div>
		</div>
    <?php ActiveForm::end(); ?>
</div>
