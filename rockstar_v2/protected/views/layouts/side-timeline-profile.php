<?php 
	$name = "Jennifer Doe Jennifer Doe II";
	$badges = 9;
	$points = 120;
	$imageurl = "/media/b20.jpg";
?>    					
<div class="col-md-12">
	<div style="min-height:200px; padding-bottom:15px">
		<div class="col-md-6" style="min-height:140px; padding:20px; background:whitesmoke;">
    		<div class="col-md-12">
    			<h3> New Status </h3>
    			<br/> <textarea placeholder="pindahin ke sini rif"></textarea>
    		</div>

    	</div>
    	<div class="col-md-1" style="height:15px;"></div>
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
