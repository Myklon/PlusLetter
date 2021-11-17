<?php
use yii\grid\GridView;
?>
<div class='container'>
<h4>Статусы модерации</h4>
	<div class='col-md-12'>
		<div class='col-md-3'>
			<a href='/backend/web/moderation/create' class='btn btn-success'>Создать статус модерации</a>
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
		[
			'label' => 'Управление',
			'value' => function($data)
			{
				return "
					<a href='/backend/web/moderation/update?id={$data->ID}' class='btn btn-info glyphicon glyphicon-pencil'></a>
					<a href='/backend/web/moderation/delete?id={$data->ID}' class='btn btn-danger glyphicon glyphicon-remove' onClick='return confirm(\"Удалить статус модерации?\") ? true : false;'></a>
				";
			},
			'format' => 'raw',
		],
    ],
]);
?>