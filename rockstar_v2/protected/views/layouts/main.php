<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<?php
$id = Yii::app()->user->getId();
if(empty($id)){
   // $this->redirect(Yii::app()->request->baseUrl.'/site/login');
}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/simple-line-icons.css" type="text/css" />
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


<body style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/background.png'); font-family:Source Sans Pro, Helvetica Neue, Helvetica, Arial, sans-serif";>

			<?php  echo $content;   ?>
		
	<div style="margin-left:5%; margin-right:5%;">

		

			<div id="footer">
				<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.3.min.js"></script>
				<script>
					$(document).ready(function(){

						$("#TransaksiRequestTopupPoint_POINT").keyup(function(){
							$("#TransaksiRequestTopupPoint_biaya").val( $("#TransaksiRequestTopupPoint_POINT").val()*1000);
						});

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
