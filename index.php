<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>EFE!</title>

		<!--CSS-->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap-light.css">
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="images/efe.ico"/>
		<!--JS-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/jquery.plugin.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<script src="js/jquery.countdown-es.js"></script>
		<script>
		$(function () {
			$('#defaultCountdown').countdown({until: new Date(2016, 1-1, 11,12)}); 
		});
		</script>

		<?php
		  $videos = array('video1', 'video2', 'video3', 'video4','video5', 'video6', 'video7','video8','video9');
		  $i = rand(0, count($videos)-1);
		  $bg = "$videos[$i]";
		  $mp4 = ".mp4";
		  $webm = ".webm";
		  $jpg = ".jpg";
		  $videos = "videos/";
		  $images = "images/";
		?>

	</head>

	<body>
	 	<!-- BACKGROUND VIDEO -->
	    <video id="video" loop autoplay preload poster="<?php echo $images; echo $bg; echo $jpg;	 ?>">
	        <source src="<?php echo $videos; echo $bg; echo $mp4; ?>" type="video/mp4" />
	        <source src="<?php echo $videos; echo $bg; echo $webm; ?>" type="video/webm" />
	    </video>
		<!--DARK OVERLAY-->
		<div class="overlay"></div>
		<!--WRAP-->
		<div id="wrap">
			<!--CONTAINER-->
			<div class="container">
				<img src="images/logo.png" alt="EFE!" class="image-align" />	
				<div id="defaultCountdown"></div>
			</div>
		</div>
		<!--/WRAP-->
	</body>
</html>