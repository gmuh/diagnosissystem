<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Diagnostic System On Malaria</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="css/style1.css" /> -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
	<style>
		#log{
			border: 5px solid #777;
			padding: 15px;
			height: auto;
			border-radius: 0 0 80px 80px;
			background-color: ;
			
		
		}#log ul li{
			list-style-type: none;
			font-family: broadway;
			color: 000;
			margin-top: 50px;
			text-align: center;
			font-size: 18px;
			line-height: 50px;
		}#log h3{
			text-align: center;
		}

		#footer{
			margin-bottom: 100px;
			border-radius: 25%;
			text-align: center;
			background-color: green;
			margin-top: auto;
			width: 90%;				


		}

	</style>
<title>
	<?php if(isset($page_title)){
				echo $page_title;
				unset($page_title);
			}
	?>
</title>
<link rel="stylesheet" type="text/css" href="css/style1.css" />

<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
<header class="head">

		<nav class="navbar navbar-default navbar-fixed-top ">

			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target="#example">
						<span class="sr-only">toggle navbar</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand" style="font-size:2em; font-family:Broadway;">Malaria And Typhoid Fever Diagnosis System</a>
				</div>
				<div class="collapse navbar-collapse" id="example">
					<ul class="nav navbar-nav">
						<li class="active"><a href="home.php">Home</a></li>
						<li><a href="about.php">About Malaria</a></li>
						<li><a href="logout.php">Logout</a></li>
						
						

					</ul>
									
			</div>
		</nav>
	</header>
	<div id="cont" style="margin-top:80px; margin-left:50px;">
		<img src="images/logo.jpg" height="160px" width="1170px">
	</div>
	<div class="container" style="margin-top:0px;">

		<div class="row" >
			
				<div id="log">

			<?php
			if(isset($_SESSION['form_id'])){
				echo'<li class="first active">';
					
			}
			
	?>
</body>		
</html>	