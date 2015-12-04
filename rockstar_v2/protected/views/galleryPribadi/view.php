<?php
/* @var $this GalleryPribadiController */
/* @var $model GalleryPribadi */

$this->breadcrumbs=array(
	'Gallery Pribadis'=>array('index'),
	$model->ID_GALLERY,
);

$this->menu=array(
	array('label'=>'List GalleryPribadi', 'url'=>array('index')),
	array('label'=>'Create GalleryPribadi', 'url'=>array('create')),
	array('label'=>'Update GalleryPribadi', 'url'=>array('update', 'id'=>$model->ID_GALLERY)),
	array('label'=>'Delete GalleryPribadi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_GALLERY),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GalleryPribadi', 'url'=>array('admin')),
);
?>

<h1>View GalleryPribadi #<?php echo $model->ID_GALLERY; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_GALLERY',
		'ID_FANBASE',
		'ID_USER',
		'GAMBAR_GALLERY',
	),
)); ?>
