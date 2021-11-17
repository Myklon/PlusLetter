<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Corres */

$this->title = 'Редактирование товара';
$this->params['breadcrumbs'][] = ['label' => 'Список товаров', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corres-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
        'category_list' => $category_list,
        'category_list_active' => $category_list_active,
        'mailingservices_list'=>$mailingservices_list,
        'mailingservices_list_active'=>$mailingservices_list_active,
        'mailsystems_list'=>$mailsystems_list,
        'mailsystems_list_active'=>$mailsystems_list_active,
    ]) ?>

</div>
