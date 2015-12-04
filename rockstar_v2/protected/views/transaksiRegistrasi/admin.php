<?php
/* @var $this TransaksiRegistrasiController */
/* @var $model TransaksiRegistrasi */

$this->breadcrumbs=array(
	'Transaksi Registrasis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TransaksiRegistrasi', 'url'=>array('index')),
	array('label'=>'Create TransaksiRegistrasi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#transaksi-registrasi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Transaksi Registrasis</h1>

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
	'id'=>'transaksi-registrasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_REGISTRASI',
		'NAMA_LENGKAP',
		'TEMPAT',
		'TANGGAL',
		'NEGARA',
		'PROVINSI',
		/*
		'KOTA',
		'ALAMAT',
		'KODE_POS',
		'NO_TELP',
		'EMAIL',
		'TWITTER',
		'NAMA_IBU',
		'NAMA_AYAH',
		'NO_SAKTI',
		'CORP',
		'VID',
		'STATUS_REKONSILIASI',
		'STATUS_RELEASE',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
