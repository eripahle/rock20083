<?php
/* @var $this TimelineController */
/* @var $data Status */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_USER')); ?>:</b>
	<?php echo CHtml::encode($data->ID_USER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATETIME_STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->DATETIME_STATUS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KONTEN')); ?>:</b>
	<?php echo CHtml::encode($data->KONTEN); ?>
	<br />


</div>