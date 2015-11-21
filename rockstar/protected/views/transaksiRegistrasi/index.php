<?php
/* @var $this TransaksiRegistrasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksi Registrasis',
);

$this->menu=array(
	array('label'=>'Create TransaksiRegistrasi', 'url'=>array('create')),
	array('label'=>'Manage TransaksiRegistrasi', 'url'=>array('admin')),
);
?>

<h1>Transaksi Registrasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
