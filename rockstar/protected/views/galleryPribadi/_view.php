<?php
/* @var $this GalleryPribadiController */
/* @var $data GalleryPribadi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_GALLERY')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_GALLERY), array('view', 'id'=>$data->ID_GALLERY)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_FANBASE')); ?>:</b>
	<?php echo CHtml::encode($data->ID_FANBASE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_USER')); ?>:</b>
	<?php echo CHtml::encode($data->ID_USER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GAMBAR_GALLERY')); ?>:</b>
	<?php echo CHtml::encode($data->GAMBAR_GALLERY); ?>
	<br />


</div>