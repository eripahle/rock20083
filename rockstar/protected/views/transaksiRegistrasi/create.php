<?php
/* @var $this TransaksiRegistrasiController */
/* @var $model TransaksiRegistrasi */

$this->breadcrumbs=array(
	'Transaksi Registrasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransaksiRegistrasi', 'url'=>array('index')),
	array('label'=>'Manage TransaksiRegistrasi', 'url'=>array('admin')),
);
?>

<h1>Create TransaksiRegistrasi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>