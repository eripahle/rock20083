<?php
/* @var $this GalleryBarangController */
/* @var $model GalleryBarang */

$this->breadcrumbs=array(
	'Gallery Barangs'=>array('index'),
	$model->ID_GALLERY_BARANG=>array('view','id'=>$model->ID_GALLERY_BARANG),
	'Update',
);

$this->menu=array(
	array('label'=>'List GalleryBarang', 'url'=>array('index')),
	array('label'=>'Create GalleryBarang', 'url'=>array('create')),
	array('label'=>'View GalleryBarang', 'url'=>array('view', 'id'=>$model->ID_GALLERY_BARANG)),
	array('label'=>'Manage GalleryBarang', 'url'=>array('admin')),
);
?>

<h1>Update GalleryBarang <?php echo $model->ID_GALLERY_BARANG; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>