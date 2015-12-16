<?php
/* @var $this TimelineController */
/* @var $dataProvider CActiveDataProvider */
	$name = "Jennifer Doe";
	$badges = 999;
	$points = 120;
	$profile_image = "/media/b20.jpg";
	$rating = "/media/rating.png";
?>    					
	<div class=" col-xs-12 col-md-2">
		<div class="panel" style="min-width:160px; background-color:white">
	        <div class="panel-heading text-center" style="background-color:#555;color:#eee;">
	        	<h4><?php echo $name; ?></h4>
	        </div>
	            <div class="panel-body text-center" >	           		
    		   		<div class=" col-xs-12 col-md-12">
    		   			<center><img src="<?php echo Yii::app()->request->baseUrl.$rating; ?>" style="width:80%; max-width:350px; margin-left:10%; margin-right:10%; margin-top:5%"></center>
    		   			<hr>
    		   		</div>
    				<div class=" col-xs-12  col-md-12">   			
    					<img class="image-responsive" src="<?php echo Yii::app()->request->baseUrl.$profile_image; ?>" style="width:100%; margin-left:2%; margin-right:2%;">                   				
    					<br />
    				</div>	
    		   		<div class=" col-xs-12 col-md-12">
    		   			<br>
    		   			<div class=" col-xs-6 col-md-6"> 
	    					<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/coin.png" style="width:99%; max-width:120px; "> 
	    					 	<br/>
	    					<h4><b><?php echo $points;?></b></h4> 
	    				</div>    				
	    				<div class="col-xs-6 col-md-6"> 
	    					<img class="image-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/media/badge.png" style="width:99%; max-width:120px;"> <br/>
	    					<h4><b><?php echo $badges;?></b></h4>
	    				</div>
	    			</div>
	    			<div class=" col-xs-12 col-md-12 text-center">
	    				<div class="col-xs-6 col-md-6">   				
	    				</div>
	    				<div class="col-xs-6 col-md-6 "> 
	    				</div>
	    			</div>
	            </div>
	    </div>
    </div>
    

	<div class="col-xs-12 col-md-7" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;"></div>   
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12" style="solid #ccc;">
						<div class="col-md-12">
    						<?php $this->renderPartial('_form', array('model'=>$model)); ?>
    					</div>	<hr>
						<?php 
						foreach ($status as $stat) {?>
						<div style="overflow:auto; border: 1px solid #ccc;margin-bottom:4%; margin-left:2%; width:96%; background:whitesmoke;"> 
							<div class="col-md-12">
								<?=  '<a href=""><h4><b>'.$stat['NAMA_LENGKAP'].'</b></a></h4><h6>
								Shared at '.$stat['DATETIME_STATUS'].'</h6>' ?>
							</div>
							<div class="col-md-12" style="border:1px solid #ccc; padding-top:10px; padding-bottom:10px; background:white;">				
								<div class="col-md-9">
									<h5><?= $stat['KONTEN'] ?></h5>
								</div>

								<?php 	
								$criteria = new CDbCriteria();
								$komen = Komentar::model()->get_data_komentar($stat['ID_STATUS_USERS']);
								?>

								<div class="col-md-3">
									<a href="#"> Like </a><br />								
									<a> Comment (<?php echo count($komen);?>)</a>
								</div>

							</div>

							<div class="row-fluid">							
								<?php
								$i=0;
								foreach ($komen as $k) {?>
									<div class="col-md-1"><br/></div>
									<div class="col-md-11" style="margin-top:10px;">
										<div class="col-md-12" style="background:whitesmoke; border:1px solid #ccc; padding-top:5px; padding-bottom:5px">									
											<a><b> <?php echo $k['NAMA_LENGKAP']?></b></a>
										</div>
										<div class="col-md-12" style="border:1px solid #ccc; background:white; padding-top:5px; padding-bottom:5px">								
											<?php echo $k['KOMENTAR']?>
										</div>
									</div>
									<?php $i++;} ?>
							</div>	

								<div class="col-md-1"><br/></div>
								<form method="POST">								
									<div class="col-md-10" style="margin-top:10px;">
										<textarea style="width:98%; resize:none" name="komen" placeholder="  add comment"></textarea>
										<input type="hidden" name="idstat" value="<?php echo $stat['ID_STATUS_USERS'] ?>">
									</div>
									<div class="col-md-1" style="margin-top:10px;">
										<input type="submit" class="btn btn-default" value="send" style="float:right; width:54px; height:46px;">
									</div>									
								</form>	

						</div>
						<?php } ?>
					</div>
				</div><!--/panel-body-->
			</div><!--/panel-->					
		</div> 
	</div>
	<div class="col-xs-12 col-md-3">
		<?php $this->renderpartial('../layouts/side-timeline-news');  ?>
	</div>
</Br>
</div>
</div>
