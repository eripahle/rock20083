<?php
/* @var $this TransaksiRegistrasiController */
/* @var $model TransaksiRegistrasi */

$this->breadcrumbs=array(
	'Transaksi Registrasis'=>array('index'),
	$model->ID_REGISTRASI,
);

$this->menu=array(
	array('label'=>'List TransaksiRegistrasi', 'url'=>array('index')),
	array('label'=>'Create TransaksiRegistrasi', 'url'=>array('create')),
	array('label'=>'Update TransaksiRegistrasi', 'url'=>array('update', 'id'=>$model->ID_REGISTRASI)),
	array('label'=>'Delete TransaksiRegistrasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_REGISTRASI),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransaksiRegistrasi', 'url'=>array('admin')),
);
?>

<h1>View TransaksiRegistrasi #<?php echo $model->ID_REGISTRASI; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_REGISTRASI',
		'NAMA_LENGKAP',
		'TEMPAT',
		'TANGGAL',
		'NEGARA',
		'PROVINSI',
		'KOTA',
		'ALAMAT',
		'KODE_POS',
		'NO_TELP',
		'EMAIL',
		'TWITTER',
		'NAMA_IBU',
		'NAMA_AYAH',
		'NO_SAKTI',
		'CORP',
		'STATUS_REKONSILIASI',
		'STATUS_RELEASE',
	),
)); ?>
