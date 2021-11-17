<?php
use yii\helpers\Html;
?>
<?php if (isset($mailsystems_list)): ?>
    <ul class='list_category'>
        <?php foreach ($mailsystems_list as $id => $name): ?>
            <li>
			<?php if(@array_key_exists($id,$mailsystems_list_active)): ?>
				<?= Html::checkbox("Product_mailsystems[$id]", 1).' '.$name; ?>
			<?php else: ?>
				<?= Html::checkbox("Product_mailsystems[$id]", 0).' '.$name; ?>
			<?php endif; ?>
			</li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>