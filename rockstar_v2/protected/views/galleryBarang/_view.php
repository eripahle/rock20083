<?php
/* @var $this GalleryBarangController */
/* @var $data GalleryBarang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_GALLERY_BARANG')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_GALLERY_BARANG), array('view', 'id'=>$data->ID_GALLERY_BARANG)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_USERS')); ?>:</b>
	<?php echo CHtml::encode($data->ID_USERS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_GALLERY')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_GALLERY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KODE_GALLERY')); ?>:</b>
	<?php echo CHtml::encode($data->KODE_GALLERY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JENIS_GALLERY')); ?>:</b>
	<?php echo CHtml::encode($data->JENIS_GALLERY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SAMPEL_GALLERY')); ?>:</b>
	<?php echo CHtml::encode($data->SAMPEL_GALLERY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GAMBAR_GALLERY')); ?>:</b>
	<?php echo CHtml::encode($data->GAMBAR_GALLERY); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('HARGA_POINT')); ?>:</b>
	<?php echo CHtml::encode($data->HARGA_POINT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HARGA_POINT_BONUS')); ?>:</b>
	<?php echo CHtml::encode($data->HARGA_POINT_BONUS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HARGA_CASH')); ?>:</b>
	<?php echo CHtml::encode($data->HARGA_CASH); ?>
	<br />

	*/ ?>

</div>