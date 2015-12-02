<!-- <header>
    <div class="col-md-12">
      <div class="col-md-10"></div>
      <div class="col-md-2"><br />        
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/site/login"><button class="btn btn-block btn-lg btn-warning">Login Here</button></a>    
      </div>
    </div>
</header> -->

<!-- Begin Body -->
<div style="min-width:500px;">
  <!-- <div class="row"> -->
          <!-- left side column -->
         <!--mid column-->
          <?php $this->renderpartial('../layouts/side-komunitas');  ?>
          <!-- right content column-->
          <div class="col-md-7">
              <div class="panel" style="min-width=500px;">
                <div class="panel-heading text-center" style="background-color:#111;color:#fff;">GALLERY ROCKSTAR</div>   
                <div class="panel-body">
                  
                  <div class="row">
                  <div class="col-sm-12">
                    <h2>Lorem ipsum sit dolor</h2>
                    Lorem ipsum sit dolor amet ipsum sit dolor amet ipsum sit dolor amet ipsum sit dolor amet ipsum sit dolor amet<br><br>
                    <button class="btn btn-default">More</button><br /><br />
                  </div> 
                   <?php foreach ($gallery as $g){?>
                       <div class="col-sm-12">
                    <hr>
                   
                     <div class="panel b-a " style="min-width:380px;">
                                              
                            <div class="col-sm-6">
                      <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY,"image",array("width"=>179)); ?>
                              <!-- <img src="media/text.png" style="width:179px;">                                              -->
                            </div>
                        
                            <div class="col-sm-6" style="height:179px; min-width:170px;">  
                                <div class="col padder-v text-muted">
                                  <div class="h4"><b><?php echo $g->NAMA_GALLERY?></b></center></div> 
                                </div>        
                                <a href class="col padder-v text-muted b-r b-light">
                                  <div class="h4"><?php echo $g->JENIS_GALLERY?></div>
                                </a>
                                <a href class="col padder-v text-muted">
                                  <div class="h5">free with login </div>
                                </a>
                                <a href class="col padder-v text-muted">
                                  <div class="h5 ">Rp. <?php echo $g->HARGA_POINT_BONUS?>,-</div>
                                </a>
                                <a href class="col padder-v text-muted">
                                  <div class="h5">Rp.<?php echo $g->HARGA_CASH?>,- </div>
                                </a>
                                <a href class="col padder-v text-muted">
                                  <div class="h5">
                                  <button class="btn btn-rounded btn-warning col-sm-12"><b>GET</b></button>
                                  <br />
                                  </div>
                                </a>
                            </div>
                        </div> 
                      </div> 

                    <?php } ?>
                 
                  <div class="col-sm-12">
                <hr>
                  
                        
                  </div>
                <hr>
                </div>
              <hr>
                  </div><!--/panel-body-->
                </div><!--/panel-->
                <!--/end right column-->
        </div> 

        <!--mid column-->
          <?php $this->renderpartial('../layouts/side-social-feed');  ?>
    <!-- </div> -->
<!-- </div> -->
