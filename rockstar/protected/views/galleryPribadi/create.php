<?php
/* @var $this GalleryPribadiController */
/* @var $model GalleryPribadi */

$this->breadcrumbs=array(
	'Gallery Pribadis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GalleryPribadi', 'url'=>array('index')),
	array('label'=>'Manage GalleryPribadi', 'url'=>array('admin')),
);
?>

<h1>Create GalleryPribadi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>