<?php
/* @var $this TimelineController */
/* @var $model Status */

$this->breadcrumbs=array(
	'Statuses'=>array('index'),
	$model->ID_STATUS=>array('view','id'=>$model->ID_STATUS),
	'Update',
);

$this->menu=array(
	array('label'=>'List Status', 'url'=>array('index')),
	array('label'=>'Create Status', 'url'=>array('create')),
	array('label'=>'View Status', 'url'=>array('view', 'id'=>$model->ID_STATUS)),
	array('label'=>'Manage Status', 'url'=>array('admin')),
);
?>

<h1>Update Status <?php echo $model->ID_STATUS; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>