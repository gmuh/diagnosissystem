<head>
<?php
 
 include('includes/header.php');
 ?>

</head>
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
<body>

<?php
		 // connection to the database
						$conn = mysqli_connect("localhost","root","","expert_system");

						// Check connection
						if (mysqli_connect_errno())
						  {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  }
						  
				//		select to the database  
						$select=mysqli_select_db($conn,"expert_system");
						if(!$select){
						 die("could not select Doctors_login" . mysqli_error());					
						}
						// close the connection
						 // mysql_close($conn);
						 if(isset($_POST['submitted'])){
							if(!empty($_POST['uname']) && !empty($_POST['pass']) ){
								$user=$_POST['uname'];
								$pwd=$_POST['pass'];
								
								$query=mysqli_query($conn,"SELECT Username, Password FROM admin_login WHERE Username ='$user' AND Password='$pwd'");
								//$query=mysql_query("SELECT * FROM forms_patient WHERE Username ='$user' AND password='$pwd'");
									if(mysqli_num_rows($query)==1){
									
									//$_SESSION = mysql_fetch_array($query);
									//mysql_free_result($query)
									
									//mysql_close($expert_system);
									 header('location: admin.php');
									}
									else{
										$error='<i class="errors">Invalid username or password</i>';
									}
								
							}
							else{
								$error='<i class="errors">All field are required</i>';
							}
						  
						  }
						  else{
						  echo 	mysqli_error($conn);
						  
						  }
  ?>


  <div class="container"  style="width:350px; margin-top:90px;">
	
	<form action="admin.php" method="post" class="form-signin">
            <h2 class="form-signin-heading" style="text-align:center;">Doctor's Login</h2>
           <!--  <img src="images/me.jpg" class="img-circle" style="height:80px; width:80px; margin-left:130px; "> -->
		
		<input type="text" id="nam" name="unam"  class="form-control" required placeholder="Username" autofocus><br>
		
		<input type="password" id="pass" name="pass" class="form-control" required placeholder="Password" autofocus><br>
		
			<input type="submit" value="login" class="btn-secondary btn-lg btn-block" id="sub" name="login" style="border-style:none;">


			
		
	</form>
	<br /><br />
		
	</div>
  <?php
	include('includes/footer.php');
	?>	