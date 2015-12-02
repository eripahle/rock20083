<?php
/* @var $this TimelineController */
/* @var $dataProvider CActiveDataProvider */
?>
<!-- Begin Body -->
<div style="min-width:500px;">
	<!-- <div class="row"> -->
	<!-- left side column -->
	<!--mid column-->
	
	<?php $this->renderpartial('../layouts/side-news');  ?>
	<!-- right content column-->
	<div class="col-md-6" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">TIMELINE</div>   
			<div class="panel-body">
				<br>
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10" style="border: 1px solid #ccc;">

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
					</div>
						</div><!--/panel-body-->
					</div><!--/panel-->
					<!--/end right column-->
					<Br>
					</div> 
				</div>
			</div>
			<!-- </div> -->
			<!-- </div> -->

