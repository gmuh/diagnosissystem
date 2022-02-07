<?php 
	session_start();
	$page_title="patient Views";
	include('includes/header.php');
	
	$conn = mysqli_connect("localhost","root",""); 
	if(!$conn){
		die('Could not connect'.mysqli_error($conn));
	}
	//		select to the database  
	$select=mysqli_select_db($conn,"expert_system");
	if(!$select){
		 die("could not select adminlog" . mysqli_error($conn));
	}	
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
		#log{
			border: 5px solid #777;
			padding: 15px;
			height: auto;
			border-radius: 0 0 80px 80px;
			background-color: ;
		}
</style>
		<div class="log">
			<div class="box"> 
				<h2 class="green">
					View History Of your Questions
				</h2>
				
				<p>
		
<?php 
		/*SELECT a.form_id, b.Q_ID, c.answer_id, b.QAsk, c.body, c.date, d.Username
		from forms_patient a 
		inner join patient_question b on a.form_id =b.form_id 
		inner join answer_patient c on c.Q_ID = b.Q_ID
		inner join admin_login d on d.admin_id= c.admin_id*/
		
					$select = mysqli_query($conn,"SELECT * FROM myview WHERE form_id={$_SESSION['form_id']}");
					if($select){
						if(mysqli_num_rows($select) > 0)
						{
							echo' <table align="center" cellspacing = "3" cellpadding = "3" style="border-collapse:collapse;border-color:green;">
							<thead>
								<tr>
									<td align="left">S/No</td>
									<td align="left">Answer</td><br>
									<td align="left">Doctor\'s Name</td>
									<td align="left">Date And Time</td>
								</tr>
								</thead>';
							$i=1;	
							while($row = mysqli_fetch_array($select))
							{
							echo' <tbody><tr>
									<td align="left">'.$i.'</td>
									<td align="left">'.$row['body'].'</td>
									<td align="left">'.$row['Username'].'</td>
									<td align="left">'.$row['date'].'</td>
								</tr>';
							$i++;	
							}
							echo"</table>";
						}
						else{
							echo "SORRY NO record to dispay!!!";
						}
					}
					else{
						echo mysqli_error($conn);
					}
				?>
				
				</p>
			<a href="counselor.php"> Go Back</a>	
			</div>
	
<?php
	include('includes/footer.php');
?>