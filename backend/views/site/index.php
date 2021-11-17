<?php
use yii\helpers\Html;
$this->title = 'Admin panel';
use backend\models\AuthAssignment;
?>

<div class="container">
	<div class="alert alert-success"><strong>Добро пожаловать в Admin Panel</strong></div>
	<div class="jumbotron">
		<div class="row" style="text-align:center;">
            <div class="col-xs-12">
                <div class="col-xs-2">
                    <?= Html::a(Html::img('@web/images/menu/documento.png') . '<div>Товары</div>', ['/product/index'], ['class' => 'block_menu']) ?>
                </div>
                <div class="col-xs-2">
                    <?= Html::a(Html::img('@web/images/menu/carpeta.png') . '<div>Лицензии</div>', ['/license/index'], ['class' => 'block_menu']) ?>
                </div>
                <div class="col-xs-2">
                    <?= Html::a(Html::img('@web/images/menu/carpeta.png') . '<div>Виды уникальности</div>', ['/uniqueness/index'], ['class' => 'block_menu']) ?>
                </div>
                <div class="col-xs-2">
                    <?= Html::a(Html::img('@web/images/menu/carpeta.png') . '<div>Статусы модерации</div>', ['/moderation/index'], ['class' => 'block_menu']) ?>
                </div>
                <div class="col-xs-2">
                    <?= Html::a(Html::img('@web/images/menu/carpeta.png') . '<div>Категории</div>', ['/category/index'], ['class' => 'block_menu']) ?>
                </div>
                <div class="col-xs-2">
                    <?= Html::a(Html::img('@web/images/menu/carpeta.png') . '<div>Почтовые сервисы</div>', ['/mailing-services/index'], ['class' => 'block_menu']) ?>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-2">
                    <?= Html::a(Html::img('@web/images/menu/carpeta.png') . '<div>Почтовые системы</div>', ['/mail-systems/index'], ['class' => 'block_menu']) ?>
                </div>
                <div class="col-xs-2">
                    <?= Html::a(Html::img('@web/images/menu/proceso.png') . '<div>Основная информация сайта</div>', ['/license/index'], ['class' => 'block_menu']) ?>
                </div>
            </div>
		</div>
	</div>
</div>
