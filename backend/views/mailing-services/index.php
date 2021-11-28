<?php
use yii\grid\GridView;
?>
<div class='container'>
<h4>Почтовые сервисы</h4>
	<div class='col-md-12'>
		<div class='col-md-3'>
			<a href='/backend/web/mailing-services/create' class='btn btn-success'>Создать новый почтовый сервис</a>
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
            'label' => 'Изображение',
            'value' => function($data)
            {
                return "<img src='/frontend/web/uploads/mail-icons/{$data->Image}' width='50px'>";
            },
            'format' => 'raw',
        ],
        'Sort',
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
					<a href='/backend/web/mailing-services/update?id={$data->ID}' class='btn btn-info glyphicon glyphicon-pencil'></a>
					<a href='/backend/web/mailing-services/delete?id={$data->ID}' class='btn btn-danger glyphicon glyphicon-remove' onClick='return confirm(\"Удалить почтовый сервис?\") ? true : false;'></a>
				";
			},
			'format' => 'raw',
		],
    ],
]);
?>