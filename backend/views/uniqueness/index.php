<?php
use yii\grid\GridView;
?>
<div class='container'>
<h4>Виды уникальности</h4>
	<div class='col-md-12'>
		<div class='col-md-3'>
			<a href='/backend/web/uniqueness/create' class='btn btn-success'>Создать вид уникальности</a>
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
					<a href='/backend/web/uniqueness/update?id={$data->ID}' class='btn btn-info glyphicon glyphicon-pencil'></a>
					<a href='/backend/web/uniqueness/delete?id={$data->ID}' class='btn btn-danger glyphicon glyphicon-remove' onClick='return confirm(\"Удалить вид уникальности?\") ? true : false;'></a>
				";
			},
			'format' => 'raw',
		],
    ],
]);
?>