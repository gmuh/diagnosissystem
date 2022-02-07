<?php 
	$page_title="patient Views";
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
 <h4 style="color:blue; text-align:center";>Select Age category below </h4><br />
 	<div><center><form action='drugs.php'>
 	<select required >
 		<option value="">select age</option>
 		<option value="1"> 5-10 years</option>
 	</select>
 	<input type="submit" name="bttn" value="Search">
 	<a href="test.php"><input type="button" value="Go Back"></a>
</form>
</center></div><br /><br />
<p>
			
	
<?php
	include('includes/footer.php');
	?>	

 
 
 
 
 
 
 
 
 
 