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
				   $Q_ID=($_POST['Q_ID']); 
				   $admin_id=($_POST['admin_id']);
					$body=($_POST['body']);
					$sql = ("INSERT INTO answer_patient (Q_ID,admin_id,body) values('$Q_ID','$admin_id','$body')");
					$result = mysqli_query($conn,$sql); // Run the query.
					if ($result){
					echo "<h3 style='color:red';>Your Answer Has Been Sent Successfully</h3>";
						}
					}
			$result2 = mysqli_query($conn,"SELECT * FROM admin_login WHERE admin_id=1");							
			
	?> 
         
		<h3 class="h3">You Can Answer A Patient Question on Malaria Here!!!</h3>
		
		<form action="" method="POST">
	  <table> 
<?php
while ($row =mysqli_fetch_array($result2))
   {
     extract($row);

	  echo'<p>Doctors Name:<input type="text" name="urname" size="30" value="'.$Username.'" readonly></p>
	  <input type="hidden" name="Q_ID" value="'.$_GET['Q_ID'].'"/>
	   <input type="hidden" name="admin_id" value="'.$admin_id.'"/>';
	  }
	  ?>
	  <p><legend>Answer:</legend><textarea rows="10" cols="50" name="body" required></textarea></p>
       <input type="submit" name="submit" value="Send"/> <a href="questions.php">Go back</a></td>
       <input type="hidden" name="submitted">
	</table>           
	  </form>
	 
		
<?php
	include('includes/footer.php');
	?>	
	
	
			