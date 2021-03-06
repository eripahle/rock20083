<div class="featured-image" style="border:1px solid #edf1f2; background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/media/a1.png')"></div>
	
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array(
					'label'=>'Home', 
					'url'=>array('/'),					
					'visible'=>!Yii::app()->user->isGuest),
				array(
					'label'=>'Registrasi', 
					'url'=>array('/registrasi'),
					'visible'=>Yii::app()->user->isGuest),
				array(
					'label'=>'Timeline', 
					'url'=>array('/timeline'),
					'visible'=>!Yii::app()->user->isGuest),
				array(
					'label'=>'Profile', 
					'url'=>array('/profile'), 
					'visible'=>!Yii::app()->user->isGuest),
					// 'visible'=>!Yii::app()->user->isGuest),
				array(
					'label'=>'Login', 
					'url'=>array('/site/login'),
					'visible'=>Yii::app()->user->isGuest),
				array(
					'label'=>'Create Gallery Pribadi', 
					'url'=>array('/gallerypribadi/create'), 
				 	// 'visible'=>Yii::app()->user->getState('role') == 1),
					'visible'=>!Yii::app()->user->isGuest),
				array(
					'label'=>'View Gallery Pribadi', 
					'url'=>array('/gallerypribadi/index'), 
					'visible'=>!Yii::app()->user->isGuest),
				array(
					'label'=>'Create Gallery Barang', 
					'url'=>array('/gallerybarang/create'), 
					'visible'=>Yii::app()->user->getState('role') == 2),
					// 'visible'=>!Yii::app()->user->isGuest),
				array(
					'label'=>'View Gallery FanPage', 
					'url'=>array('/gallerybarang/index'), 
					'visible'=>!Yii::app()->user->isGuest),
					// 'visible'=>!Yii::app()->user->isGuest),
				array(
					'label'=>'Top Up Point', 
					'url'=>array('/point/topup'), 
					'visible'=>!Yii::app()->user->isGuest),
				array(
					'label'=>'Ganti Password', 
					'url'=>array('/profile/changepass'), 
					'visible'=>!Yii::app()->user->isGuest),
					// 'visible'=>!Yii::app()->user->isGuest),
				array(
					'label'=>'Logout ('.Yii::app()->user->name.')', 
					'url'=>array('/site/logout'),
					'visible'=>!Yii::app()->user->isGuest)
				),
				)); ?>
			</div><!-- mainmenu -->