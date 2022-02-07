
	 <head>

	 	<?php
			session_start();
			 
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
 
	
				<h3>For Doctors Use only</h3>
				
				
				<ul class="list" size="50">
					<li class="first" size="50">
						<a href="view.php" size="20">View registered patient</a>
					</li>
					<li class="last">
						<a href="Questions.php">View patients Questions</a>
					</li>
				</ul>
			
<?php
	include('includes/footer.php');
	?>	