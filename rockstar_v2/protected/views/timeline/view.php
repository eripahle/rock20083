<?php
/* @var $this TimelineController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->ID_STATUS,
);

$this->menu=array(
	array('label'=>'List Status', 'url'=>array('index')),
	array('label'=>'Create Status', 'url'=>array('create')),
	array('label'=>'Update Status', 'url'=>array('update', 'id'=>$model->ID_STATUS)),
	array('label'=>'Delete Status', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_STATUS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Status', 'url'=>array('admin')),
);
?>

<h1>View Status #<?php echo $model->ID_STATUS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_STATUS',
		'ID_FANBASE',
		'ID_USER',
		'DATETIME_STATUS',
		'KONTEN',
	),
)); ?>
