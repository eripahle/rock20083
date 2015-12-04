<?php
/* @var $this TransaksiRegistrasiController */
/* @var $data TransaksiRegistrasi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_REGISTRASI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_REGISTRASI), array('view', 'id'=>$data->ID_REGISTRASI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_LENGKAP')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_LENGKAP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEMPAT')); ?>:</b>
	<?php echo CHtml::encode($data->TEMPAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TANGGAL')); ?>:</b>
	<?php echo CHtml::encode($data->TANGGAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NEGARA')); ?>:</b>
	<?php echo CHtml::encode($data->NEGARA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PROVINSI')); ?>:</b>
	<?php echo CHtml::encode($data->PROVINSI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KOTA')); ?>:</b>
	<?php echo CHtml::encode($data->KOTA); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMAT')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KODE_POS')); ?>:</b>
	<?php echo CHtml::encode($data->KODE_POS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_TELP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_TELP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TWITTER')); ?>:</b>
	<?php echo CHtml::encode($data->TWITTER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_IBU')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_IBU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_AYAH')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_AYAH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_SAKTI')); ?>:</b>
	<?php echo CHtml::encode($data->NO_SAKTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CORP')); ?>:</b>
	<?php echo CHtml::encode($data->CORP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS_REKONSILIASI')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS_REKONSILIASI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS_RELEASE')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS_RELEASE); ?>
	<br />

	*/ ?>

</div>