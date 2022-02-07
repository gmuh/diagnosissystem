
<?php
 
 include('includes/header.php');
 ?>
<style>
		

		
		#footer{
			margin-bottom: 100px;
			border-radius: 25%;
			text-align: center;
			background-color: green;
			margin-top: auto;
			width: 90%;				


		}
	</style>
</head>
<body>

<div class="container"  style="width:350px; margin-top:100px;">
	
	<form action="plogin.php" method="post" class="form-signin">
            <h2 class="form-signin-heading" style="text-align:center;">Registered Patient login</h2>
           <!--  <img src="images/me.jpg" class="img-circle" style="height:80px; width:80px; margin-left:130px; "> -->
		
		<input type="text" id="nam" name="name1"  class="form-control" required placeholder="Username" autofocus><br>
		
		<input type="password" id="pass" name="pass1" class="form-control" required placeholder="Password" autofocus><br>
		
			<input type="submit" value="login" class="btn-secondary btn-lg btn-block" id="sub" name="login" style="border-style:none;">
			<input type="hidden" name="submitted">

			
		
	</form><br />
	<a href = "reg.php"><strong>Click here to register</strong></a><br />
		
		<br />
	</div>

	<?php
	include('includes/footer.php');
	?>	