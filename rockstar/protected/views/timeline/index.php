<?php
/* @var $this TimelineController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>Timeline</h1>
<hr>
<h3>Create Status</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<hr>

<?php 
foreach ($status as $stat) {?>
<div style="border:1px solid #ccc;padding:10px;overflow:auto;"> 
	<div style="float:left;width: 80%;word-wrap: break-word;">
		<?=  '<b>'.$stat['NAMA_LENGKAP'].' </b><br>'.$stat['KONTEN'] ?>
	</div>
	<div style="float:right">
		<i><?= $stat['DATETIME_STATUS'] ?></i>
	</div>
	<hr>
	<div>
		<a href="#"> Like </a>
		<form>
			<textarea></textarea>
			<input type="submit" value="Komentar">
		</form>
	</div>
</div> <br>

<? } 

//$this->widget('zii.widgets.CListView', array(
// 	'dataProvider'=>$dataProvider,
// 	'itemView'=>'_view',
// 	 'sortableAttributes'=>array(
//             'name'=>'ID_STATUS',
//         ),
// ));
?>
