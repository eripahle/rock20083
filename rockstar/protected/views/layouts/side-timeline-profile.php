<?php 
	$name = "Jennifer Doe Jennifer Doe II";
	$badges = 9;
	$points = 120;
	$imageurl = "/media/b20.jpg";
?>    					
<div class="col-md-12">
	<div style="min-height:230px; padding-bottom:15px">
		<div class="col-md-6" style="min-height:130px; padding:20px; background:whitesmoke;">
    		<div class="col-md-12">
    			<h3> New Status </h3>
    			<br/> <textarea placeholder="pindahin ke sini rif"></textarea>
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
