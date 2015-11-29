<?php
/* @var $this GalleryPribadiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallery Pribadis',
);

$this->menu=array(
	array('label'=>'Create GalleryPribadi', 'url'=>array('create')),
	array('label'=>'Manage GalleryPribadi', 'url'=>array('admin')),
);
?>

<h1>Gallery Pribadis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
