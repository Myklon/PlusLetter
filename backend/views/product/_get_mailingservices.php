<?php
use yii\helpers\Html;
?>
<?php if (isset($mailingservices_list)): ?>
    <ul class='list_category'>
        <?php foreach ($mailingservices_list as $id => $name): ?>
            <li>
			<?php if(@array_key_exists($id,$mailingservices_list_active)): ?>
				<?= Html::checkbox("Product_mailingservices[$id]", 1).' '.$name; ?>
			<?php else: ?>
				<?= Html::checkbox("Product_mailingservices[$id]", 0).' '.$name; ?>
			<?php endif; ?>
			</li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>