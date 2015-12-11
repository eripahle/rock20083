<?php
/* @var $this TimelineController */
/* @var $dataProvider CActiveDataProvider */
	$name = "Jennifer Doe Jennifer Doe II";
	$badges = 9;
	$points = 120;
	$imageurl = "/media/b20.jpg";
?>    					
<div class="col-md-12">
	<div style="min-height:230px; padding-bottom:15px">

		<div class="col-md-6" style="min-height: auto; padding: 5px; background:whitesmoke;margin-bottom: 2%;">
    		<div class="col-md-12">
    			<h4> New Status </h4>
    			<?php $this->renderPartial('_form', array('model'=>$model)); ?>
    		</div>

    	</div>
    	<div class="col-md-1" style="height:15px;"></div>
    	<div class="col-md-5" style="min-width:350px; padding-bottom:20px; min-height:140px; background:whitesmoke;">
    		<table style="min-width:330px">
    			<tr>
    				<td colspan="3" rowpan="2">
    					<h3 style="color:black;"><b><?php echo "  ".$name; ?></b></h3>
    				</td>
    				<td rowspan="4" colspan="4">
    					<img src="<?php echo Yii::app()->request->baseUrl.$imageurl; ?>" style="max-width:150px; padding-top:20px;">                      							
    		   		</td>	
    			</tr>
    			<tr>
    				<td>
    					<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/coin.png" style="max-width:30px;"></h4>
    				</td>
    				<td>
    					<h4 ><b><?php echo $points." Points";?></b></h4>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/badge.png" style="max-width:40px;">
    				</td>
    				<td>
    					<h4 ><b><?php echo $badges." Badges";?></b></h4>
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
					<div class="col-sm-12" style="solid #ccc;">

					<hr>
					<?php 
					foreach ($status as $stat) {?>
					<div style="overflow:auto;border: 1px solid #ccc;margin-bottom:2%;padding-bottom: 5px;"> 
						<div class="col-md-12" style="background:whitesmoke;">
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
						<hr>
						<div class="row-fluid">
						<?php 	
						$criteria = new CDbCriteria();
						$komen = Komentar::model()->get_data_komentar($stat['ID_STATUS_USERS']);
						?>
						
						<div class="col-sm-12" style="solid #ccc;">
						<h4> KOMENTAR (<?php echo count($komen);?>)</h4>
						<?php
						$i=0;
						foreach ($komen as $k) {?>
							<b> <?php echo $k['NAMA_LENGKAP']?> : </b><br>
							<?php echo $k['KOMENTAR']?><hr>
						<?php $i++;} ?>
						</div>
						</div>
							
						
							<form method="POST">
								<div class="col-md-11">
									<textarea style="width:100%; resize:none" name="komen" placeholder="Add a Comment"></textarea>
									<input type="hidden" name="idstat" value="<?php echo $stat['ID_STATUS_USERS'] ?>">
								</div>
								<div class="col-md-1">
									<input type="submit" value="Add" style="float:right; width:47px; height:47px;">
								</div>									
							</form>
						</div>
					</div>
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

 