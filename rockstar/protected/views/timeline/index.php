<?php
/* @var $this TimelineController */
/* @var $dataProvider CActiveDataProvider */
?>
<!-- Begin Body -->
<div style="min-width:500px;">
	<!-- <div class="row"> -->
	<!-- left side column -->
	<!--mid column-->
	
	<!-- right content column-->

	<?php $this->renderpartial('../layouts/side-timeline-profile');  ?>

	<div class="col-md-8" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">TIMELINE</div>   
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10" style="solid #ccc;">

					<?php $this->renderPartial('_form', array('model'=>$model)); ?>
					<hr>

					<?php 
					foreach ($status as $stat) {?>
					<div style="border:1px solid #ccc;padding:10px;overflow:auto;"> 
						<div class="col-md-12" style="background:whitesmoke; padding:10px;">
							<?=  '<a href=""><h3><b>'.$stat['NAMA_LENGKAP'].'</b></a></h3><h5>
							Shared at '.$stat['DATETIME_STATUS'].'</h5>' ?>
						</div>
						<div class="col-md-11" style="padding-top:10px;">
							<h4><?= $stat['KONTEN'] ?></h4>
						</div>
						<div class="col-md-1" style="float:right; padding-top:10px;">
							<a href="#"> Like </a>
						</div>
						<hr>
						<div>
							<form>
								<div class="col-md-11">
									<textarea style="width:100%; resize:none" placeholder="Add a Comment"></textarea>
								</div>
								<div class="col-md-1">
									<input type="submit" value="Add" style="float:right; width:47px; height:47px;">
								</div>
									
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

	<?php $this->renderpartial('../layouts/side-timeline-news');  ?>
			</div>
			<!-- </div> -->
			<!-- </div> -->

