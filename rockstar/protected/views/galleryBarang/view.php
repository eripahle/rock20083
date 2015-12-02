<?php
/* @var $this GalleryBarangController */
/* @var $model GalleryBarang */

$this->breadcrumbs=array(
	'Gallery Barangs'=>array('index'),
	$model->ID_GALLERY_BARANG,
);

$this->menu=array(
	array('label'=>'List GalleryBarang', 'url'=>array('index')),
	array('label'=>'Create GalleryBarang', 'url'=>array('create')),
	array('label'=>'Update GalleryBarang', 'url'=>array('update', 'id'=>$model->ID_GALLERY_BARANG)),
	array('label'=>'Delete GalleryBarang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_GALLERY_BARANG),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GalleryBarang', 'url'=>array('admin')),
);
?>

<h1>View GalleryBarang #<?php echo $model->ID_GALLERY_BARANG; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_GALLERY_BARANG',
		'ID_USERS',
		'NAMA_GALLERY',
		'KODE_GALLERY',
		'JENIS_GALLERY',
		'SAMPEL_GALLERY',
		'GAMBAR_GALLERY',
		'HARGA_POINT',
		'HARGA_POINT_BONUS',
		'HARGA_CASH',
	),
)); ?>
