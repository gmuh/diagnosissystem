<?php 
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

	</style>

<?php 
					$select = mysqli_query($conn,"SELECT * FROM drugs WHERE drugs_id='02' ORDER BY drugs_id");
					if($select){
						if(mysqli_num_rows($select) > 0)
						{
							echo'<h4> <table align="center" cellspacing = "4" cellpadding = "4" style="border-collapse:collapse;border-color:green;color:green;">
							<thead>
								<tr>
									<td align="left" style="color:blue;">S/No</td>
									<td align="left" style="color:blue";>Name</td><br>
									<td align="left" style="color:blue";>Duration</td>
									<td align="left" style="color:blue";>Dosage</td>
								</tr>
								</thead>';
							$i=1;	
							while($row = mysqli_fetch_array($select))
							{
							echo' <tbody><tr>
									<td align="left">'.$i.' </td>
									<td align="left">'.$row['Name'].' </td>
									<td align="left">'.$row['Duration'].' </td>
									<td align="left">'.$row['Dosage'].'</td>
									
								</tr>';
							$i++;	
							}
							echo"</table></h4>";
						}
						else{
							echo "SORRY NO record to dispay!!!";
						}
					}
					else{
						echo mysqli_error($conn);
					}
				?>
				<br /><br /><br />

				<center><a href="side.php" style="color:red";><strong> Click Here to View side effect</strong></a></center>

<?php
	include('includes/footer.php');
	?>	
	
			