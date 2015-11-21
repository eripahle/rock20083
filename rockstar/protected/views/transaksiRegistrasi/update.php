<?php
/* @var $this TransaksiRegistrasiController */
/* @var $model TransaksiRegistrasi */

$this->breadcrumbs=array(
	'Transaksi Registrasis'=>array('index'),
	$model->ID_REGISTRASI=>array('view','id'=>$model->ID_REGISTRASI),
	'Update',
);

$this->menu=array(
	array('label'=>'List TransaksiRegistrasi', 'url'=>array('index')),
	array('label'=>'Create TransaksiRegistrasi', 'url'=>array('create')),
	array('label'=>'View TransaksiRegistrasi', 'url'=>array('view', 'id'=>$model->ID_REGISTRASI)),
	array('label'=>'Manage TransaksiRegistrasi', 'url'=>array('admin')),
);
?>

<h1>Update TransaksiRegistrasi <?php echo $model->ID_REGISTRASI; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>