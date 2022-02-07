      <?php
 $page_title="forms_patient";
 include('includes/header.php');
 ?>
	 
				<?php
		 // connection to the database
				$conn = mysqli_connect("localhost","root",""); 
				if(!$conn){
				die('Could not connect'.mysqli_error($conn));
						  }
				//		select to the database  
						$select=mysqli_select_db($conn,"expert_system");
						if(!$select){
						 die("could not select forms_patient" . mysqli_error($conn));
						}
						// close the connection
						 // mysql_close($conn);
						 if(isset($_POST['submitted'])){
							if(!empty($_POST['uname']) && !empty($_POST['pass']) ){
								$user=$_POST['uname'];
								$pwd=$_POST['pass'];
								
								$query=mysqli_query($conn,"SELECT * FROM forms_patient WHERE Username ='$user' AND Password='$pwd'");
									if(mysqli_num_rows($query)==1){
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
  ?>
     				<form method="POST" action="forms.php" enctype="multipart/form-data" >
				<img  src="images/login.jpg" height="160" width="230" >
				 
			
				<ul class="list">
					<li class="first">
						<input type="text" size="25" name="uname" placeholder="FirstName">
					</li>
					<li>
						<input type="password" size="25" name="pass" placeholder="Last Name" >
					</li>
					<li class="last">&nbsp&nbsp&nbsp&nbsp
						<input type="submit" name="sub" value="send"/>
						<input type="reset" value="cancel"/>
						<input type="hidden" name="submitted"/>
					</li>
				</ul>
				</form>
			</fieldset>	
			</div>
			<div class="box">
				<ul class="list">
				<br>
				<br>
				
				</ul>
			</div>
		</div><br class="clearfix" />
	</div>
</div>
<?php 
include('includes/footer.php');
?>
</body>
</html>