
             
            <div class="panel"  style="width:100%; border:2px solid #edf1f2;">
                <div class="panel-heading" style="background-color:#f6f8f8;">
                	Latest Tweets
                </div>                  
                
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/media/text.png" style="width:100%;">                	
                <hr>
            </div>

             <div style="margin-top:10%">  
             	<?php $this->renderpartial('../layouts/side-timeline-news');  ?>
             </div>
