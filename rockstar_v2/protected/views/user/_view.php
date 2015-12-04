<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_USER')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_USER), array('view', 'id'=>$data->ID_USER)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_REGISTRASI')); ?>:</b>
	<?php echo CHtml::encode($data->ID_REGISTRASI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_JENIS')); ?>:</b>
	<?php echo CHtml::encode($data->ID_JENIS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMER_SAKTI')); ?>:</b>
	<?php echo CHtml::encode($data->NOMER_SAKTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VAS')); ?>:</b>
	<?php echo CHtml::encode($data->VAS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />

	*/ ?>

</div>