
	 <div class="panel" style="width:100%; border:2px solid #edf1f2;">
                <div class="panel-heading" style="background-color:#f6f8f8; color">
                	News
                </div> 

	<div class="panel-body" >            	
            		<div>
            			<table class="table" border=0 align="center"> 
				            <style>
				                    img {
				                      float: left;
				                    }
				            </style> 
				            <?php
				            	$info = "lorem ipsum sit amet lorem ipsum sit dolor amet lorem ipsum sit dolor amet lorem ipsum sit dolor amet";
				            ?>
				            
				            <tr>
				                <td>
				                	<p><img src ="<?php echo Yii::app()->request->baseUrl; ?>/media/a5.jpg" style="width:100%"><br/>				                
				                	<h3 style="margin-top:25px; padding-top:10px;"><b>News 1</b><h3>
				                	<h5><?php echo $info."..." ?><a href=""><i>Read More</i></a></p></h5>				                	 
				                </td>						 
						 	</tr>						 	

				            <tr>
				                <td>
				                	<p><img src ="<?php echo Yii::app()->request->baseUrl; ?>/media/b2.jpg" style="width:100%;"></p>
				                
				                	<h3><b>News 2</b><h3>
				                	<h5><?php echo $info."..." ?><a href=""><i>Read More</i></a></p></h5>
				                </td>						 
						 	</tr>			          

				    	</table>
            		</div>
                </div>
        </div>
    </div>

