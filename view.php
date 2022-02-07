<?php 
	$page_title="patient Views";
	include('includes/header.php');
	
	$conn = mysqli_connect("localhost","root",""); 
	if(!$conn){
		die('Could not connect'.mysqli_error());
	}
	//		select to the database  
	$select=mysqli_select_db($conn,"expert_system");
	if(!$select){
		 die("could not select adminlog" . mysqli_error($conn));					
	}	
 ?>
		
					<h2 class="green">List of patients that have Registered so far
					</h2>
				<p>
				
				<?php 
					$select = mysqli_query($conn,"SELECT * FROM forms_patient ORDER BY form_id");
					
					if($select)
					{
						if(mysqli_num_rows($select) > 0)
						{
							echo' <table align="center" cellspacing = "5" cellpadding = "5" style="border-collapse:collapse;border-color:green;">
							<thead>
								<tr>
									<td margin="left">No.</td>
									<td margin="left">First Name(s)</td>
									<td margin="left">Last Name(s)</td>
									
									
								</tr>
								</thead>';
								
							$i=1;	
							while($row = mysqli_fetch_array($select))
							{
							echo' <tbody><tr>
									<td align="left">'.$i.'</td>
									<td align="left">'.$row['Firstname'].'</td>
									<td align="left">'.$row['Lastname'].'</td>
									
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
				<a href="admin.php">Go back</a>
				
				</p>
			
				
	
	