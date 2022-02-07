
<head>


<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

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


<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo7a">
			<img src="images/logo7a.jpg" height="150px" width="932px"/>
		</div>	
		<div id="menu">
			<ul>
			<?php
			if(isset($_SESSION['form_id'])){
				echo'<li class="first active">';
					echo'<a href="counselor.php">Home</a>';
				echo'</li>';
			}
			else{
			echo'<li class="first active">
					<a href="home.php">Home</a>
				</li>';
			}
			?>
			
				<li>
					<a href="about.php">About HIV/AIDs</a>
				</li>
				<li>
					<a href="latestnews.php">Latest News</a>
				</li>
				<li><a href="logout.php"style="margin-left:50%;">Logout</a></li>
				
			</ul><br class="clearfix" />
		</div>
	</div>
	<div id="page">