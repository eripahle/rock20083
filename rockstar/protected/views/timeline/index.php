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
	<?php 
	$name = "Jennifer Doe Jennifer Doe II";
	$badges = 9;
	$points = 120;
	$imageurl = "/media/b20.jpg";
?>    					
<div class="col-md-12">
	<div style="min-height:320px; padding-bottom:15px">
		<div class="col-md-5" style="min-height:140px; padding:20px; background:whitesmoke;">
    		<div class="col-md-12">
    			<h3> New Status </h3>
    			<?php $this->renderPartial('_form', array('model'=>$model)); ?>					
    		</div>
    	</div>
    	<div class="col-md-2" style="height:15px;"></div>
    	<div class="col-md-5" style="min-width:300px; padding-bottom:5px; min-height:140px; background:whitesmoke;">
    		<table style="min-width:300px">
    			<tr>
    				<td colspan="3" rowpan="2">
    					<h3><?php echo "  ".$name; ?></b></h3>
    				</td>
    				<td rowspan="3" colspan="3">
    					<img src="<?php echo Yii::app()->request->baseUrl.$imageurl; ?>" style="max-width:100px; padding-top:20px;">                      							
    		   		</td>	
    			</tr>
    			<tr>
    				<td>
    					<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/coin.png" style="max-width:22px;"></h4>
    				
    					<h5 style="padding-left:25px;"><b><?php echo $points." Points";?></b></h5>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/badge.png" style="max-width:30px;">
    				
    					<h5><b><?php echo $badges." Badges";?></b></h5>
    				</td>
    			</tr>
    			<tr>
    				<td colspan="3"></td>
    				<td>
    					<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/rating.png" style="height:20px;">    				
    				</td>
    			</tr>


    		
    		</table>
    	</div>

    	
    </div>	
</div>


	<div class="col-md-8" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">TIMELINE</div>   
			<div class="panel-body">
				<div class="row">

					<?php 
					foreach ($status as $stat) {?>
					<div style="padding:60px;overflow:auto;"> 
						<div class="col-md-12" style="background:whitesmoke; padding:5px;">
							<?=  '<a href=""><h3><b>'.$stat['NAMA_LENGKAP'].'</b></a></h3><h5>
							Shared at '.$stat['DATETIME_STATUS'].'</h5>' ?>
						</div>
						<div class="col-md-11" style="padding-top:10px;">
							<h4><?= $stat['KONTEN'] ?></h4>
						</div>
						<div class="col-md-1" style="float:right; padding-top:10px;">
							<a href="#"> Like </a>
						</div>
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

 