
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
		<div id="content">
			<div class="box"> 
				<h2 class="green">
					Questions sent by registered patients,You can Reply Pls!!!
				</h2>
				
			<p>
				
				<?php 
					$select = mysqli_query($conn,"SELECT * FROM patient_question ORDER BY Q_ID");
					if($select){
						if(mysqli_num_rows($select) > 0)
						{
							echo' <table align="center" cellspacing = "3" cellpadding = "3" style="border-collapse:collapse;border-color:green;color:green;">
							<thead>
								<tr>
									<td align="left" style="color:blue";>S/No</td>
									<td align="left" style="color:blue";>Questions</td><br>
									<td align="left" style="color:blue";>REPLY</td>
								</tr>
								</thead>';
							$i=1;	
							while($row = mysqli_fetch_array($select))
							{
							echo' <tbody><tr>
									<td align="left">'.$i.'</td>
									<td align="left">'.$row['QAsk'].'</td>
									<td align="left"><a href="answers.php?Q_ID='.$row['Q_ID'].'" style="color:green;">Reply</a></td>
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
				<a href="admin.php">Go Back</a>
			</p>
			</div>
				<br class="clearfix" />
		</div>
	
		<br class="clearfix" />
<?php
	include('includes/footer.php');
	?>	