<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/simple-line-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font.css" type="text/css" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" rel="stylesheet">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>


<body style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/media/3.jpg');">

	<div class="container">
		<div class="featured-image" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/media/a1.png')"></div>
	</div>
	<div class="container">
	<!-- <div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div> --><!-- header -->
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
					'url'=>array('/transaksiregistrasi/profile'), 
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
			<div class="container">
				<?php  echo $content;   ?>
			</div>

			<div class="clear"></div>

			<div id="footer">
				<script type="text/javascript" href="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.3.min.js"></script>
				<script>
					$(document).ready(function(){
						var len = 8;
						var pass;
						$('#Users_PASSWORD').val(randomPassword(len));

						$('#refresh_pass').on('click',function(){
							$('#Users_PASSWORD').val(randomPassword(len));
						});
						function randomPassword(length) {
						var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOP1234567890";
						var pass = "";
						for (var x = 0; x < length; x++) {
							var i = Math.floor(Math.random() * chars.length);
							pass += chars.charAt(i);
						}
						return pass;
					}
					});
					
				</script>
				<script>
					
					// $(document).ready(function(){
					// 	<?$length = 8;
					// 	$chars = array_merge(range(0,9), range('a','z'), range('A','Z'));
					// 	shuffle($chars);
					// 	$password = implode(array_slice($chars, 0, $length)); ?>
					// 	console.log("<??>");
					// 	$('#refresh_pass').on('click',function(){
					// 		console.log("");
					// 	});
					// });
</script>
Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
All Rights Reserved.<br/>
<?php echo Yii::powered(); ?>
</div><!-- footer -->

</div><!-- page -->

</body>
</html>
