<?php
session_start();
			$conn = mysqli_connect("localhost","root",""); 
				if(!$conn){
							die('Could not connect'.mysqli_error($conn));
						  }
				//		select to the database  
						$select=mysqli_select_db($conn,"expert_system");
						if(!$select){
						 die("could not select forms_patient" . mysqli_error($conn));	
							}	
						if(isset($_POST['submitted'])){
							if(!empty($_POST['name1']) && !empty($_POST['pass1'])){
							$nam=$_POST['name1'];
							$pas=$_POST['pass1'];
						$query = mysqli_query($conn,"SELECT * FROM forms_patient WHERE Username='$nam' AND password='$pas'");		
									$row = mysqli_fetch_array($query);
									$_SESSION['form_id']= $row['form_id'];
									if(mysqli_num_rows($query)==1){
									 header('location: counselor.php');
									}
									else{
										echo'<i class="errors">Invalid User Name or Password<i>';
									}
								
							}
							else{
								echo'<i class="errors">All field are required</i>';
							}
						  }	
						  else{
								echo mysqli_error($conn);
						  }
?>