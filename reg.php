<?php
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
<h2 class="green">
please fill this form to be registered as one of the patients
</h2>
<?php 
	$conn = mysqli_connect("localhost","root",""); 
				if(!$conn){
				die('Could not connect'.mysqli_error($conn));
						  }
				//		select to the database  
						$select=mysqli_select_db($conn,"expert_system");
						if(!$select){
						 die("could not select patient_pin" . mysqli_error($conn));
						}
	if (isset($_POST['submitted']))// if properly submitted
	{
		if(($_POST['password']) == ($_POST['confirm_password'])){
		
			$pwd=($_POST['password']);
			$fname=($_POST['fName']);
			$lname=($_POST['lName']);
			$age=($_POST['age']);
			$gender=($_POST['gender']);
			$email=($_POST['email']);
			$phon=($_POST['phone']);
			$username=($_POST['uname']);
			
			// Make the query:
			$sql = ("INSERT INTO forms_patient (FirstName, LastName, Gender, Age, Email, PhoneNo, Username, Password)
									values('$fname', '$lname','$gender','$age', '$email', '$phon','$username', '$pwd')");
					
			$result = mysqli_query($conn,$sql); // Run the query.
					
			if (!$result) 
			{	// If it ran OK i.e. the query.
						
				// Print a message:
				echo '<h1>Error While trying to Register with Us</h1>
				<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'.mysqli_error($conn);
			}
			else
			{	// If it did not run OK.
						
				// Public message:
				echo '<h1 align="center">Thank you!</h1>
					<p align="center"><b>You are now registered. </b></p>';
		
						
			} // End of if ($result) IF
			
			
		}
		else{
			echo 'Password missmatch';
		}	
		
	}	
		
?>

  <html>
  <head> </head>
  <body>      	
             <table>
                <form action="reg.php" method="POST" enctype="multipart/form-data">
                    <tr>
                        <td> Firstname: </td>
                        <td><input type="text" name="fName" value="<?php if(isset($_POST['fName'])) echo $_POST['fName']; ?>" id="fName"/ required> </td>
                    </tr>
                    
                    <!-- NOTE: <?php if(isset($_POST['sName'])) //if it is set then echo or print 
								echo $_POST['sName']; ?> 
                    is called STICKY i.e. it retains the user's entry -->
                    
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    
                    <tr>
                        <td> Lastname: </td>
                        <td><input type="text" name="lName" id="lName" value="<?php if (isset($_POST['lName'])) echo $_POST['lName']; ?>" required/> </td>
                    </tr>
					<tr></tr>
                    <tr></tr>
                    <tr></tr>
                    
                    <tr>
                        <td> Age: </td>
                        <td><input type="text" name="age" id="age" value="<?php if (isset($_POST['lName'])) echo $_POST['age']; ?>" required/> </td>
                    </tr>
                    
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    
                    <tr>
                        <td> Gender: </td>
                        <td><select name="gender">
                        		<option value='Male'>Male </option>
                                <option value='female'>Female </option>
                               </select> 
                       </td>
                    </tr>
                    
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    
					<tr>
                        <td> Email Address: </td>
                        <td><input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required/> </td>
                    </tr>
                    
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    
                    <tr>
                        <td> Phone Number: </td>
                        <td><input type="number" name="phone" id="phone" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>" required/> </td>
                    </tr>
                    
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
					
					  <tr>
                        <td> Username: </td>
                        <td><input type="text" name="uname" id="password" value="<?php if (isset($_POST['password'])) echo $_POST['uname']; ?>" required /> </td>
                    </tr>
                    
					<tr></tr>
                    <tr></tr>
                    <tr></tr>
                         
                    <tr>
                        <td> Password: </td>
                        <td><input type="password" name="password" id="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" required/> </td>
                    </tr>
                    
					<tr></tr>
                    <tr></tr>
                    <tr></tr>
                         
                    <tr>
                        <td> Confirm Password: </td>
                        <td><input type="password" name="confirm_password" id="confirm_password"  /> </td>
                    </tr>
					
                   <tr>
                        <td colspan="10" align="center"> <input type="submit" name="submit" value="Register" /><input type ="reset" value="Cancel"><a href="patientlogin.php"><input type="button" value="Go Back"></td>
						<input type="hidden" name="submitted" />
					</tr>
                    
                </form>
            </table>
<?php
include('includes/footer.php');

?>

