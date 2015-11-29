<?php
/* @var $this GalleryPribadiController */
/* @var $model GalleryPribadi */

$this->breadcrumbs=array(
	'Gallery Pribadis'=>array('index'),
	$model->ID_GALLERY=>array('view','id'=>$model->ID_GALLERY),
	'Update',
);

$this->menu=array(
	array('label'=>'List GalleryPribadi', 'url'=>array('index')),
	array('label'=>'Create GalleryPribadi', 'url'=>array('create')),
	array('label'=>'View GalleryPribadi', 'url'=>array('view', 'id'=>$model->ID_GALLERY)),
	array('label'=>'Manage GalleryPribadi', 'url'=>array('admin')),
);
?>

<h1>Update GalleryPribadi <?php echo $model->ID_GALLERY; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>