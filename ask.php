	<?php
			session_start();
			$page_title="home"; 
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

	<?php 
			$conn = mysqli_connect("localhost","root",""); 
						if(!$conn){
						die('Could not connect'.mysqli_error($conn));
								  }
								$select=mysqli_select_db($conn,"expert_system");
								if(!$select){
								 die("could not select patient_question". mysqli_error($conn));
								}
			if (isset($_POST['submitted'])){
				   $form_id=($_POST['form_id']);
					$ask=($_POST['askme']);
					$sql = ("INSERT INTO patient_question (form_id,QAsk) values('$form_id','$ask')");
					$result = mysqli_query($conn,$sql); // Run the query.
					if ($result){
					echo "<h4 style='color:blue';>Your Question has been sent</h4>";
						}
					}
			$resultsel = mysqli_query($conn,"SELECT * FROM forms_patient WHERE form_id={$_SESSION['form_id']}");							
			
	?> 
         
		<h3 class="h3">You can ask a doctor any question relating to Malaria Here</h3>
		
		<form action="" method="POST">
	  <table> 
<?php


     

	  echo'<center><p>Name:<input type="text" name="urname" size="30" value="'.$Firstname." ".$Lastname.'" writeonly required></p>
	  <input type="hidden" name="form_id" value="'.$form_id.'"/>
	  <p>Email:<input type="text" name="emailme" size="30" value="'.$Email.'" writeonly required></p></center>';
	  
	  ?>
	  <p><legend>Questions:</legend><textarea rows="10" cols="50" name="askme" required></textarea></p>
       <input type="submit" name="submit" value="Send"/>
       <a href="counselor.php"><input type="button" value="Go Back"></a>
   </td>
       <input type="hidden" name="submitted">
	</table>           
	  </form>
		
	
				
	<?php
include('includes/footer.php');
?>
			
			