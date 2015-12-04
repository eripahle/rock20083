<?php
/* @var $this GalleryBarangController */
/* @var $model GalleryBarang */

$this->breadcrumbs=array(
	'Gallery Barangs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GalleryBarang', 'url'=>array('index')),
	array('label'=>'Create GalleryBarang', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gallery-barang-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gallery Barangs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gallery-barang-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_GALLERY_BARANG',
		'ID_USERS',
		'NAMA_GALLERY',
		'KODE_GALLERY',
		'JENIS_GALLERY',
		'SAMPEL_GALLERY',
		/*
		'GAMBAR_GALLERY',
		'HARGA_POINT',
		'HARGA_POINT_BONUS',
		'HARGA_CASH',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
