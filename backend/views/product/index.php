<?php

use common\models\License;
use yii\grid\GridView;
?>
<div class='container'>
<h4>Список товаров</h4>
	<div class='col-md-12'>
		<div class='col-md-3'>
			<a href='/backend/web/product/create' class='btn btn-success'>Создать товар</a>
		</div>
        <div class='col-md-9'>
        <?=$this->render('_form_search',['model'=>$model]);?>
		</div>
	</div>
</div>

<?=GridView::widget([
    'dataProvider' => $dataProvider,
    'tableOptions' => [
        'class' => 'table table-condensed',
    ],
    'columns' => [
            'Name',
        'Price',
        [
            'label' => 'Лицензия',
            'value' => function($data)
            {
                $id_adaptive = $data->IDlicense;
                $model_license = License::findOne($id_adaptive);
                return "<span>{$model_license->Name}</span>";
            },
            'format' => 'raw',
        ],
        [
            'label' => 'Уникальность',
            'value' => function($data)
            {
                $id_uniqueness = $data->IDuniqueness;
                $model_uniqueness = \common\models\Uniqueness::findOne($id_uniqueness);
                return "<span>{$model_uniqueness->Name}</span>";
            },
            'format' => 'raw',
        ],
        [
            'label' => 'Превью изображение',
            'value' => function($data)
            {
                return "<img src='/frontend/web/uploads/items/{$data->ImagePreview}' width='75px'>";
            },
            'format' => 'raw',
        ],
        [
            'label' => 'Карточка товара',
            'value' => function($data)
            {
                return "<img src='/frontend/web/uploads/items/{$data->CardImagePreview}' width='75px'>";
            },
            'format' => 'raw',
        ],

        [
            'label' => 'Изображение в описании',
            'value' => function($data)
            {
                return "<img src='/frontend/web/uploads/items/{$data->Images}' width='75px'>";
            },
            'format' => 'raw',
        ],

        [
            'label' => 'Адаптивность',
            'value' => function($data)
            {
                $active = ['Не адаптивное','Адаптивное'];
                if($data->Adaptive==0)
                {
                    return "<span class='label label-danger'>Не адаптивное</span>";
                }
                if($data->Adaptive==1)
                {
                    return "<span class='label label-success'>Адаптивное</span>";
                }
            },
            'format' => 'raw',
        ],
        [
            'label' => 'Модерация',
            'value' => function($data)
            {
                $id_moderation = $data->IDmoderation;
                $model_moderation = \common\models\Moderation::findOne($id_moderation);
                return "<span>{$model_moderation->Name}</span>";
            },
            'format' => 'raw',
        ],
		[
			'label' => 'Активность',
			'value' => function($data)
			{
				$active = ['Не активно','Активно'];
				if($data->Active==0)
				{
					return "<span class='label label-danger'>Не активно</span>";
				}
				if($data->Active==1)
				{
					return "<span class='label label-success'>Активно</span>";
				}
			},
			'format' => 'raw',
		],
		[
			'label' => 'Управление',
			'value' => function($data)
			{
				return "
					<a href='/backend/web/product/update?id={$data->ID}' class='btn btn-info glyphicon glyphicon-pencil'></a>
					<a href='/backend/web/product/delete?id={$data->ID}' class='btn btn-danger glyphicon glyphicon-remove' onClick='return confirm(\"Удалить товар?\") ? true : false;'></a>
				";
			},
			'format' => 'raw',
		],
    ],
]);
?>