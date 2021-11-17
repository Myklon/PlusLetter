<?php
use yii\grid\GridView;
?>
<div class='container'>
<h4>Лицензии</h4>
	<div class='col-md-12'>
		<div class='col-md-3'>
			<a href='/backend/web/license/create' class='btn btn-success'>Создать лицензию</a>
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
		'Percent',
		[
			'label' => 'Управление',
			'value' => function($data)
			{
				return "
					<a href='/backend/web/license/update?id={$data->ID}' class='btn btn-info glyphicon glyphicon-pencil'></a>
					<a href='/backend/web/license/delete?id={$data->ID}' class='btn btn-danger glyphicon glyphicon-remove' onClick='return confirm(\"Удалить лицензию?\") ? true : false;'></a>
				";
			},
			'format' => 'raw',
		],
    ],
]);
?>