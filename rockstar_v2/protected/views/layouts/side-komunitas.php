 <?php

 $nama_komunitas = "SoniQ";
 $deskripsi = "komunitas fans '...'";
 $post = 532;
 $member = 7036;
 $imageurl = "a5.jpg";

 $nama_komunitas1 = "HayfaQu";
 $deskripsi1 = "komunitas fans '...'";
 $post1 = 452;
 $member1 = 3076;
 $imageurl1 = "b2.jpg";

 ?>
            <div style="padding-bottom:50px;">
                <div class="panel b-a" style="border:2px solid #edf1f2;">
                  <div class="panel-body text-center m-b clearfix ">
                      <div class="thumb-lg avatar m-t-n-xxl" style="margin-bottom:5%;">
                        <img class="img-circle" src="<?php echo Yii::app()->request->baseUrl; ?>/media/<?php echo $imageurl; ?>" alt="..." style="width:95%; margin-top:5%; border:2px solid #23b7e5;">
                       </div>                        
                        <div style="margin-bottom:10%">
                          <h3><center>
                            <?php echo $nama_komunitas; ?>
                          </center></h3>
                        </div> 
                        <div style="margin-bottom:12%">
                          <h6><font color="gray">
                          <?php echo $deskripsi; ?>
                          </font><h6>
                        </div>  
                          <button class="btn btn-rounded btn-default" style="border:2px solid #23b7e5;"><b>Join</b></button>                                                    
                    </div> 
                        <div class="col-md-6 text-center" style="background-color:#16aad8; border-radius: 0 0 0 3px;">                        
                          <a href class="col padder-v text-muted b-r b-light">
                            <div class="h4">
                              <font color="white">
                                <?php echo $post; ?>
                              </b><br />
                              <span class="h6" style="color:#eee;">
                                Posts
                              </span></font>
                            </div>
                          </a>
                        </div>
                        <div class="col-md-6 text-center" style="background-color:#23b7e5; border-radius: 0 0 3px 0;">                        
                          <a href class="col padder-v text-muted b-r b-light">
                            <div class="h4">
                              <font color="white">
                                <?php echo $member; ?>
                              </b><br />
                              <span class="h6"  style="color:#eee;">
                                Member
                              </span></font>
                            </div>
                          </a>            
                      </div>
                </div>
            </div>

            <div style="margin-bottom:10%">
                <div class="panel b-a" style="border:2px solid #edf1f2;">
                  <div class="panel-body text-center m-b clearfix ">
                      <div class="thumb-lg avatar m-t-n-xxl" style="margin-bottom:5%;">
                        <img class="img-circle" src="<?php echo Yii::app()->request->baseUrl; ?>/media/<?php echo $imageurl1; ?>" alt="..." style="width:95%; margin-top:5%; border:2px solid #23b7e5;">
                       </div>                        
                        <div style="margin-bottom:10%">
                          <h3><center>
                            <?php echo $nama_komunitas1; ?>
                          </center></h3>
                        </div> 
                        <div style="margin-bottom:12%">
                          <h6><font color="gray">
                          <?php echo $deskripsi1; ?>
                          </font><h6>
                        </div>  
                          <button class="btn btn-rounded btn-default" style="border:2px solid #23b7e5;"><b>Join</b></button>                                                    
                    </div> 
                        <div class="col-md-6 text-center" style="background-color:#16aad8; border-radius: 0 0 0 3px;">                        
                          <a href class="col padder-v text-muted b-r b-light">
                            <div class="h4">
                              <font color="white">
                                <?php echo $post1; ?>
                              </b><br />
                              <span class="h6" style="color:#eee;">
                                Posts
                              </span></font>
                            </div>
                          </a>
                        </div>
                        <div class="col-md-6 text-center" style="background-color:#23b7e5; border-radius: 0 0 3px 0;">                        
                          <a href class="col padder-v text-muted b-r b-light">
                            <div class="h4">
                              <font color="white">
                                <?php echo $member1; ?>
                              </b><br />
                              <span class="h6"  style="color:#eee;">
                                Member
                              </span></font>
                            </div>
                          </a>            
                      </div>
                </div>

            </div>

