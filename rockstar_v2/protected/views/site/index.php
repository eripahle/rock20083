<!-- <header>
</header> -->

<!-- Begin Body -->

<!-- <div class="row"> -->
<!-- left side column -->
<div class="col-md-2" >
  <?php $this->renderpartial('../layouts/side-komunitas');  ?>
</div>
<!--mid column-->
<!-- right content column-->
<div class="col-md-7">

  <div class="panel" style="width:100%; border:1px solid #edf1f2; border-radius:3px 3px 3px 3px;">  
    <div class="panel-body">                  
      <div class="row">
        <div class="col-sm-12">
          <h2>Gallery Barang</h2>
          Lorem ipsum sit dolor amet ipsum sit dolor amet ipsum sit dolor amet ipsum sit dolor amet ipsum sit dolor amet<br><br>
          <a class="">More</a><br /><br />
        </div> 
      </div>
    </div>
  </div>

  <div class="panel" style="width:100%; border:1px solid #7266ba; border-radius:3px 3px 3px 3px;" >  
    <div class="panel-body"> 
      <div class="row">
        <div class="col-sm-12">
          <h2>Gallery Movie</h2>                
        </div> 
      </div> 
      <div class="col-sm-12" style="align:center; width:100%;  padding-right:0%; margin-top:0%; margin-bottom:0%; margin-right:0%; ">
        <?php foreach ($gallery as $g){?>
        <?php 
        if($g->JENIS_GALLERY=='Movie'){
        $image = $g->SAMPEL_GALLERY;?>
        <div class="col-sm-4 text-center" style="margin-left:0%; max-width:180px; padding-left:0%; margin-top:4%; margin-bottom:1%; ">                  
          <div class="panel-body" style="border:1px solid #7266ba; background-color:#f6f8f8; border-radius:6px 6px 6px 6px; ">

            <!-- <div class="col text-muted"> -->
            <div class="h4" style="margin-top:0px; padding-top:0px;"><?php echo $g->NAMA_GALLERY?></center></div> 
            <!-- </div>    -->   
            <?php $infoFile = pathinfo(Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY); ?>
            <?php if($infoFile['extension'] == 'gif' || $infoFile['extension'] == 'jpg' || $infoFile['extension'] == 'png' ) {?>
            <img class="img-circle" src='<?php echo Yii::app()->request->baseUrl; ?>/images/berita/<?php echo $image; ?>' style="border:1px solid #7266ba; width:100%; border-radius:3px 3px 3px 3px; margin-bottom:5%;" >
            <?php }else{?>
            <video width="100%" controls>
              <source src="<?php echo Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY ?>" type="video/mp4" />
                Your browser does not support HTML5 video.
              </video>
              <?php } ?>


              <a href class="col padder-v text-muted b-r b-light">
                <div class="h5">Jenis : <b>Movie</div>
              </a>

              <a href class="padder-v text-muted">
              <?php if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){?>
                  <div class="h6 bg-warning"><i><b>get this item free with login</b></i> </div>  
                  <?php }else{?>
                  <div class="col-sm-5 h6" style="margin-left:0px; padding-left:0px; margin-right:0px; padding-right:0px;">
                  PoinBonus<br><b><?php echo $g->HARGA_POINT_BONUS?> </b>coin
                </div>
                <div class="col-sm-1 h6" style="margin-left:3px; padding-left:0px; margin-right:1px; padding-right:0px"><b>or</b></div>
                <div class="col-sm-5 h6" style="margin-left:0px; padding-left:0px; margin-right:0px; padding-right:0px;">
                  Cash<br><b>Rp.<?php echo $g->HARGA_CASH?></b>
                </div>
                  <?php } ?>
               </a>

                <a href class="col padder-v text-muted">
                  <div class="h5">
                   <?php
                      $id = Yii::app()->user->getId();
                      if(!empty($id)){
                        if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){
                          echo CHtml::link(CHtml::encode('Free'), 
                            array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-danger col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini?'
                              ));
                        }
                        if($g->HARGA_POINT != 0){
                          echo CHtml::link(CHtml::encode('Point'), 
                            array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-primary col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Point?'
                              ));
                        }?>
                        <?php
                        if ($g->HARGA_CASH != 0) {
                          echo CHtml::link(CHtml::encode('Cash'), 
                            array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-success col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Cash?'
                              ));
                        }
                      }else{
                       echo CHtml::link(CHtml::encode('Silahkan Login untuk Membeli'), 
                        array('Site/Login'),
                        array(
                          'submit'=>array('Site/Login'),
                          'class' => 'btn btn-success'
                          ));
                     }
                     ?>  
                    <br />
                  </div>
                </a>
              </div>
            </div> 
            <?php }} ?>
          </div>
          <br />
          <a style="align:right;">More items >></a>  
        </div><!--/panel-body-->
      </div><!--/panel-->

      <div class="panel" style="width:100%; border:1px solid #27c24c; border-radius:3px 3px 3px 3px;" >  
        <div class="panel-body"> 
          <div class="row">
            <div class="col-sm-12">
              <h2>Gallery Picture</h2>                 
            </div> 
          </div> 
          <div class="col-sm-12" style="align:center; width:100%;  padding-right:0%; margin-top:0%; margin-bottom:0%; margin-right:0%; ">
            <?php foreach ($gallery as $g){?>
            <?php 
        if($g->JENIS_GALLERY=='Picture'){
        $image = $g->SAMPEL_GALLERY;?>
        <div class="col-sm-4 text-center" style="margin-left:0%; max-width:180px; padding-left:0%; margin-top:4%; margin-bottom:1%; ">                  
          <div class="panel-body" style="border:1px solid #7266ba; background-color:#f6f8f8; border-radius:6px 6px 6px 6px; ">

            <!-- <div class="col text-muted"> -->
            <div class="h4" style="margin-top:0px; padding-top:0px;"><?php echo $g->NAMA_GALLERY?></center></div> 
            <!-- </div>    -->   
            <?php $infoFile = pathinfo(Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY); ?>
            <?php if($infoFile['extension'] == 'gif' || $infoFile['extension'] == 'jpg' || $infoFile['extension'] == 'png' ) {?>
            <img class="img-circle" src='<?php echo Yii::app()->request->baseUrl; ?>/images/berita/<?php echo $image; ?>' style="border:1px solid #7266ba; width:100%; border-radius:3px 3px 3px 3px; margin-bottom:5%;" >
            <?php }else{?>
            <video width="100%" controls>
              <source src="<?php echo Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY ?>" type="video/mp4" />
                Your browser does not support HTML5 video.
              </video>
              <?php } ?>


              <a href class="col padder-v text-muted b-r b-light">
                <div class="h5">Jenis : <b>Picture</div>
              </a>

              <a href class="padder-v text-muted">
              <?php if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){?>
                  <div class="h6 bg-warning"><i><b>get this item free with login</b></i> </div>  
                  <?php }else{?>
                  <div class="col-sm-5 h6" style="margin-left:0px; padding-left:0px; margin-right:0px; padding-right:0px;">
                  PoinBonus<br><b><?php echo $g->HARGA_POINT_BONUS?> </b>coin
                </div>
                <div class="col-sm-1 h6" style="margin-left:3px; padding-left:0px; margin-right:1px; padding-right:0px"><b>or</b></div>
                <div class="col-sm-5 h6" style="margin-left:0px; padding-left:0px; margin-right:0px; padding-right:0px;">
                  Cash<br><b>Rp.<?php echo $g->HARGA_CASH?></b>
                </div>
                  <?php } ?>
               </a>

                <a href class="col padder-v text-muted">
                  <div class="h5">
                   <?php
                      $id = Yii::app()->user->getId();
                      if(!empty($id)){
                        if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){
                          echo CHtml::link(CHtml::encode('Free'), 
                            array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-danger col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini?'
                              ));
                        }
                        if($g->HARGA_POINT != 0){
                          echo CHtml::link(CHtml::encode('Point'), 
                            array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-primary col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Point?'
                              ));
                        }?>
                        <?php
                        if ($g->HARGA_CASH != 0) {
                          echo CHtml::link(CHtml::encode('Cash'), 
                            array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-success col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Cash?'
                              ));
                        }
                      }else{
                       echo CHtml::link(CHtml::encode('Silahkan Login untuk Membeli'), 
                        array('Site/Login'),
                        array(
                          'submit'=>array('Site/Login'),
                          'class' => 'btn btn-success'
                          ));
                     }
                     ?>  
                    <br />
                  </div>
                </a>
              </div>
            </div> 
            <?php }} ?>
                </div>
                <br />
                <a style="align:right;">More items >></a> 
              </div><!--/panel-body-->
            </div><!--/panel-->

            <div class="panel" style="width:100%; border:1px solid #f05050; border-radius:3px 3px 3px 3px;" >  
              <div class="panel-body">
                <div class="row">  
                  <div class="col-sm-12">

                    <h2>Gallery Audio</h2>
                  </div> 
                </div> 
                <div class="col-sm-12" style="align:center; width:100%;  padding-right:0%; margin-top:0%; margin-bottom:0%; margin-right:0%; ">
                  <?php foreach ($gallery as $g){?>
                  <?php 
        if($g->JENIS_GALLERY=='Audio'){
        $image = $g->SAMPEL_GALLERY;?>
        <div class="col-sm-4 text-center" style="margin-left:0%; max-width:180px; padding-left:0%; margin-top:4%; margin-bottom:1%; ">                  
          <div class="panel-body" style="border:1px solid #7266ba; background-color:#f6f8f8; border-radius:6px 6px 6px 6px; ">

            <!-- <div class="col text-muted"> -->
            <div class="h4" style="margin-top:0px; padding-top:0px;"><?php echo $g->NAMA_GALLERY?></center></div> 
            <!-- </div>    -->   
            <?php $infoFile = pathinfo(Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY); ?>
            <?php if($infoFile['extension'] == 'gif' || $infoFile['extension'] == 'jpg' || $infoFile['extension'] == 'png' ) {?>
            <img class="img-circle" src='<?php echo Yii::app()->request->baseUrl; ?>/images/berita/<?php echo $image; ?>' style="border:1px solid #7266ba; width:100%; border-radius:3px 3px 3px 3px; margin-bottom:5%;" >
            <?php }else{?>
            <video width="100%" controls>
              <source src="<?php echo Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY ?>" type="video/mp4" />
                Your browser does not support HTML5 video.
              </video>
              <?php } ?>


              <a href class="col padder-v text-muted b-r b-light">
                <div class="h5">Jenis : <b>Audio</div>
              </a>

              <a href class="padder-v text-muted">
              <?php if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){?>
                  <div class="h6 bg-warning"><i><b>get this item free with login</b></i> </div>  
                  <?php }else{?>
                  <div class="col-sm-5 h6" style="margin-left:0px; padding-left:0px; margin-right:0px; padding-right:0px;">
                  PoinBonus<br><b><?php echo $g->HARGA_POINT_BONUS?> </b>coin
                </div>
                <div class="col-sm-1 h6" style="margin-left:3px; padding-left:0px; margin-right:1px; padding-right:0px"><b>or</b></div>
                <div class="col-sm-5 h6" style="margin-left:0px; padding-left:0px; margin-right:0px; padding-right:0px;">
                  Cash<br><b>Rp.<?php echo $g->HARGA_CASH?></b>
                </div>
                  <?php } ?>
               </a>

                <a href class="col padder-v text-muted">
                  <div class="h5">
                   <?php
                      $id = Yii::app()->user->getId();
                      if(!empty($id)){
                        if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){
                          echo CHtml::link(CHtml::encode('Free'), 
                            array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-danger col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini?'
                              ));
                        }
                        if($g->HARGA_POINT != 0){
                          echo CHtml::link(CHtml::encode('Point'), 
                            array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-primary col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Point?'
                              ));
                        }?>
                        <?php
                        if ($g->HARGA_CASH != 0) {
                          echo CHtml::link(CHtml::encode('Cash'), 
                            array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-success col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Cash?'
                              ));
                        }
                      }else{
                       echo CHtml::link(CHtml::encode('Silahkan Login untuk Membeli'), 
                        array('Site/Login'),
                        array(
                          'submit'=>array('Site/Login'),
                          'class' => 'btn btn-success'
                          ));
                     }
                     ?>  
                    <br />
                  </div>
                </a>
              </div>
            </div> 
            <?php }} ?>
                      </div>
                      <br />
                      <a style="align:right;">More items >></a> 
                    </div><!--/panel-body-->
                  </div><!--/panel-->




                  <div class="panel" style="width:100%; border:1px solid #7266ba; border-radius:3px 3px 3px 3px;" >  
                    <div class="panel-body"> 
                      <div class="row">
                        <div class="col-sm-12">
                          <h2>Gallery Event</h2>                
                        </div> 
                      </div> 
                      <div class="col-sm-12" style="align:center; width:100%;  padding-right:0%; margin-top:0%; margin-bottom:0%; margin-right:0%; ">
                        <?php foreach ($gallery as $g){?>
                       <?php 
        if($g->JENIS_GALLERY=='Event'){
        $image = $g->SAMPEL_GALLERY;?>
        <div class="col-sm-4 text-center" style="margin-left:0%; max-width:180px; padding-left:0%; margin-top:4%; margin-bottom:1%; ">                  
          <div class="panel-body" style="border:1px solid #7266ba; background-color:#f6f8f8; border-radius:6px 6px 6px 6px; ">

            <!-- <div class="col text-muted"> -->
            <div class="h4" style="margin-top:0px; padding-top:0px;"><?php echo $g->NAMA_GALLERY?></center></div> 
            <!-- </div>    -->   
            <?php $infoFile = pathinfo(Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY); ?>
            <?php if($infoFile['extension'] == 'gif' || $infoFile['extension'] == 'jpg' || $infoFile['extension'] == 'png' ) {?>
            <img class="img-circle" src='<?php echo Yii::app()->request->baseUrl; ?>/images/berita/<?php echo $image; ?>' style="border:1px solid #7266ba; width:100%; border-radius:3px 3px 3px 3px; margin-bottom:5%;" >
            <?php }else{?>
            <video width="100%" controls>
              <source src="<?php echo Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY ?>" type="video/mp4" />
                Your browser does not support HTML5 video.
              </video>
              <?php } ?>


              <a href class="col padder-v text-muted b-r b-light">
                <div class="h5">Jenis : <b>Event</div>
              </a>

              <a href class="padder-v text-muted">
              <?php if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){?>
                  <div class="h6 bg-warning"><i><b>get this item free with login</b></i> </div>  
                  <?php }else{?>
                  <div class="col-sm-5 h6" style="margin-left:0px; padding-left:0px; margin-right:0px; padding-right:0px;">
                  PoinBonus<br><b><?php echo $g->HARGA_POINT_BONUS?> </b>coin
                </div>
                <div class="col-sm-1 h6" style="margin-left:3px; padding-left:0px; margin-right:1px; padding-right:0px"><b>or</b></div>
                <div class="col-sm-5 h6" style="margin-left:0px; padding-left:0px; margin-right:0px; padding-right:0px;">
                  Cash<br><b>Rp.<?php echo $g->HARGA_CASH?></b>
                </div>
                  <?php } ?>
               </a>

                <a href class="col padder-v text-muted">
                  <div class="h5">
                   <?php
                      $id = Yii::app()->user->getId();
                      if(!empty($id)){
                        if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){
                          echo CHtml::link(CHtml::encode('Free'), 
                            array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-danger col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini?'
                              ));
                        }
                        if($g->HARGA_POINT != 0){
                          echo CHtml::link(CHtml::encode('Point'), 
                            array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-primary col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Point?'
                              ));
                        }?>
                        <?php
                        if ($g->HARGA_CASH != 0) {
                          echo CHtml::link(CHtml::encode('Cash'), 
                            array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-success col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Cash?'
                              ));
                        }
                      }else{
                       echo CHtml::link(CHtml::encode('Silahkan Login untuk Membeli'), 
                        array('Site/Login'),
                        array(
                          'submit'=>array('Site/Login'),
                          'class' => 'btn btn-success'
                          ));
                     }
                     ?>  
                    <br />
                  </div>
                </a>
              </div>
            </div> 
            <?php }} ?>
                            </div>
                            <br />
                            <a style="align:right;">More items >></a>  
                          </div><!--/panel-body-->
                        </div><!--/panel-->

                        <div class="panel" style="width:100%; border:1px solid #27c24c; border-radius:3px 3px 3px 3px;" >  
                          <div class="panel-body"> 
                            <div class="row">
                              <div class="col-sm-12">
                                <h2>Gallery CD/DVD</h2>                 
                              </div> 
                            </div> 
                            <div class="col-sm-12" style="align:center; width:100%;  padding-right:0%; margin-top:0%; margin-bottom:0%; margin-right:0%; ">
                              <?php foreach ($gallery as $g){?>
                              <?php 
        if($g->JENIS_GALLERY=='CD'){
        $image = $g->SAMPEL_GALLERY;?>
        <div class="col-sm-4 text-center" style="margin-left:0%; max-width:180px; padding-left:0%; margin-top:4%; margin-bottom:1%; ">                  
          <div class="panel-body" style="border:1px solid #7266ba; background-color:#f6f8f8; border-radius:6px 6px 6px 6px; ">

            <!-- <div class="col text-muted"> -->
            <div class="h4" style="margin-top:0px; padding-top:0px;"><?php echo $g->NAMA_GALLERY?></center></div> 
            <!-- </div>    -->   
            <?php $infoFile = pathinfo(Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY); ?>
            <?php if($infoFile['extension'] == 'gif' || $infoFile['extension'] == 'jpg' || $infoFile['extension'] == 'png' ) {?>
            <img class="img-circle" src='<?php echo Yii::app()->request->baseUrl; ?>/images/berita/<?php echo $image; ?>' style="border:1px solid #7266ba; width:100%; border-radius:3px 3px 3px 3px; margin-bottom:5%;" >
            <?php }else{?>
            <video width="100%" controls>
              <source src="<?php echo Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY ?>" type="video/mp4" />
                Your browser does not support HTML5 video.
              </video>
              <?php } ?>


              <a href class="col padder-v text-muted b-r b-light">
                <div class="h5">Jenis : <b> CD/DVD</div>
              </a>

              <a href class="padder-v text-muted">
              <?php if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){?>
                  <div class="h6 bg-warning"><i><b>get this item free with login</b></i> </div>  
                  <?php }else{?>
                  <div class="col-sm-5 h6" style="margin-left:0px; padding-left:0px; margin-right:0px; padding-right:0px;">
                  PoinBonus<br><b><?php echo $g->HARGA_POINT_BONUS?> </b>coin
                </div>
                <div class="col-sm-1 h6" style="margin-left:3px; padding-left:0px; margin-right:1px; padding-right:0px"><b>or</b></div>
                <div class="col-sm-5 h6" style="margin-left:0px; padding-left:0px; margin-right:0px; padding-right:0px;">
                  Cash<br><b>Rp.<?php echo $g->HARGA_CASH?></b>
                </div>
                  <?php } ?>
               </a>

                <a href class="col padder-v text-muted">
                  <div class="h5">
                   <?php
                      $id = Yii::app()->user->getId();
                      if(!empty($id)){
                        if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){
                          echo CHtml::link(CHtml::encode('Free'), 
                            array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-danger col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini?'
                              ));
                        }
                        if($g->HARGA_POINT != 0){
                          echo CHtml::link(CHtml::encode('Point'), 
                            array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-primary col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Point?'
                              ));
                        }?>
                        <?php
                        if ($g->HARGA_CASH != 0) {
                          echo CHtml::link(CHtml::encode('Cash'), 
                            array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
                            array(
                              'submit'=>array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
                              'class' => 'btn btn-success col-sm-12','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Cash?'
                              ));
                        }
                      }else{
                       echo CHtml::link(CHtml::encode('Silahkan Login untuk Membeli'), 
                        array('Site/Login'),
                        array(
                          'submit'=>array('Site/Login'),
                          'class' => 'btn btn-success'
                          ));
                     }
                     ?>  
                    <br />
                  </div>
                </a>
              </div>
            </div> 
            <?php }} ?>
                                  </div>
                                  <br />
                                  <a style="align:right;">More items >></a> 
                                </div><!--/panel-body-->
                              </div><!--/panel-->

                            </div>         
                          </div>

                          <!--right column-->
                          <div class="col-md-3">
                            <?php $this->renderpartial('../layouts/side-social-feed');  ?>          
                          </div>
                          <!-- </div> -->
                          <!-- </div> -->
