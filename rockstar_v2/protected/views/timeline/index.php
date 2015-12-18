<?php
/* @var $this TimelineController */
/* @var $dataProvider CActiveDataProvider */
$name = "Jennifer Doe";
$badges = 999;
$points = 120;
$profile_image = "/media/b20.jpg";
$rating = "/media/rating.png";
?>    			
<!-- <div class="col-md-3" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/media/a1.png')">
	
</div> -->		
<div class="col-md-12" style="margin-top:-2%; padding-top:5px; margin-left:-3%; width:106%;">	
	<?php $this->renderpartial('../layouts/navbar2');  ?>
</div>

<div class=" col-xs-12 col-md-2" style="margin-top:40px;">

	<div class="panel" style="min-width:150px; background-color:whitesmoke; border:1px solid #edf1f2;">
		<div class="panel-heading text-center" style="border-bottom:1px solid #edf1f2;">
			<h4><?php echo $name; ?></h4>
		</div>
		<div class="panel-body text-center" style="background:white;">	           		
			<div class=" col-xs-12 col-md-12">
				<center><img src="<?php echo Yii::app()->request->baseUrl.$rating; ?>" style="width:80%; max-width:350px; margin-left:10%; margin-right:10%; margin-top:5% "></center>
			</div>
			<div class=" col-xs-12  col-md-12" style="margin-top:20px;">   			
				<img class="img-circle" src="<?php echo Yii::app()->request->baseUrl.$profile_image; ?>" style="width:100%; margin-left:2%; margin-right:%; border:2px solid #23b7e5;">                   				
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
	<div class="streamline b-l b-info m-l-lg m-b padder-v" >
		<div class="pull-left-xs thumb-sm avatar" style="margin-left:-25px; margin-top:40px; margin-bottom:40px; height:50px; width:50px;">
			<img class="img-circle" src="<?php echo Yii::app()->request->baseUrl.$profile_image; ?>" style="border:1px solid #23b7e5; width:50px;">      
		</div>
		<div style="margin-bottom:40px;">
			<div class="m-l-lg" style="padding-left:1%; padding:2%; margin-top:30px;">
				<form class="m-b-none">
					<div class="input-group">
						<input type="text" class="form-control input-lg" placeholder="Input your status here">
						<span class="input-group-btn">
							<button class="btn btn-info btn-lg" type="button">POST</button>
						</span>
					</div>
				</form>
			</div>
		</div>

		<?php 
		foreach ($status as $stat) {
			?>
			<!-- begin status -->
			<div>
				<a class="pull-left thumb-sm avatar m-l-n-md">
					<img class="img-circle" src="<?php echo Yii::app()->request->baseUrl.$profile_image; ?>" style="border:1px solid #23b7e5;">      
				</a>          
				<div class="m-l-lg m-b-lg panel b-a lt">
					<div class="panel-heading pos-rlt b-light">
						<span class="arrow arrow-light left"></span>                    
						<a href><h5><?=$stat['NAMA_LENGKAP'] ?></h5></a>
						<span class="text-muted m-l-sm pull-right" style="margin-top:-25px;">
							<?= $stat['DATETIME_STATUS'] ?>
						</span>
					</div>
					<div class="panel-body">
						<div><?= $stat['KONTEN'] ?></div>
					</div>
					<?php 	
					$criteria = new CDbCriteria();
					$komen = Komentar::model()->get_data_komentar($stat['ID_STATUS_USERS']);
					?>
					<div class="m-t-sm h6" style="margin-left:10px;">
						<a href class="text-muted m-xs"><i class="icon-action-redo"></i> <?php echo count($komen).' Comments';?></a>
						<a href class="text-muted m-xs"><i class="icon-star"> Like</i></a>
					</div>
					<!-- .comment-reply -->
					<?php
					$i=0;
					foreach ($komen as $k) {
						?>
						<div class="m-l-lg">
							<hr>
							<a class="pull-left thumb-sm avatar">
								<img class="img-circle" src="<?php echo Yii::app()->request->baseUrl.$profile_image; ?>" style="border:1px solid #23b7e5;">      
							</a>          
							<div class="m-l-xxl panel b-a" style="border-top: 1px solid #edf1f2; margin-right:10px;">
								<div class="panel-heading pos-rlt">
									<span class="arrow left pull-up"></span>
									<span class="text-muted m-l-sm pull-right">
										10m ago
									</span>
									<a href><?php echo $k['NAMA_LENGKAP']?></a><br>
									<?php echo $k['KOMENTAR']?>                         
								</div>
							</div>
						</div>
						<?php $i++; } ?>
						<!-- / .comment-reply -->
						<!-- comment -->
						<div class="panel panel-default m-t-md m-b-n-sm pos-rlt" style="height:45px;">
							<form class="col-md-10 col-xs-10" style="margin-top:7px;">
								<input type="text" class="form-control no-border" style="height:30px; margin-left:5px; " placeholder="Add comment"></input>
							</form>
							<button class="col-md-2 col-xs-2 btn btn-default btn-sm" style="margin-top:7px; margin-left:-15px;"><b>Comment</b></button>
							<div class="panel-footer bg-light lter">
								<br>
							</div>	 
						</div>
						<!-- /comment -->
					</div>
				</div>
				<?php } ?>
				<!-- end of status -->

			</div>

		</div>			
		
		<div class="col-xs-12 col-md-3" style="margin-top:40px;">
			<?php $this->renderpartial('../layouts/side-timeline-news');  ?>
		</div>
	</Br>
</div>
</div>
</div>
