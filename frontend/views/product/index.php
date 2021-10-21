<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$form = ActiveForm::begin([
    'method' => 'Post',
    'action' => '/product/get-params-form',
]) ?>
<?= $form->field($model, 'name')->textInput()->hint('Пожалуйста, введите имя')?>
<?= $form->field($model, 'active')->checkbox()?>
<?= $form->field($model, 'country')->dropdownList($country);
?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Отобразить', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>

