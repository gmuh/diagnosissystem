<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Diagnostic System On Malaria</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/style2.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.css" />
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<body>
<header class="head">

		<nav class="navbar navbar-default navbar-fixed-top ">

			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target="#example">
						<span class="sr-only">toggle navbar</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand" style="font-size:2em; font-family:Broadway;">Malaria And Typhoid Fever Diagnosis System</a>
				</div>
				<div class="collapse navbar-collapse" id="example">
					<ul class="nav navbar-nav">
						<li class="active"><a href="home.php">Home</a></li>
						<li><a href="about.php">About Malaria</a></li>
						<li><a href="logout.php">Logout</a></li>
						
						

					</ul>
									
			</div>
		</nav>
	</header>
	<div id="cont" style="margin-top:80px; margin-left:50px;">
		<img src="images/logo.jpg" height="160px" width="1170px">
	</div>
	<div class="container" style="margin-top:0px;">

		<div class="row" >
			
				<div id="log">

		
      <h2 style="color:blue";>You can <strong style="color:red";>thick</strong> any of the listed symptoms you are experiencing.</h2>
		 <form action="risk.php" method="POST">
	  <table> 
<ol style="color:green";>
<li>What is your gender?.Male <input type="checkbox"  name="values[]" value="symptom"> Female <input type="checkbox"  name="values[]" value="risk">
</li>
<li>Do you have rash on your abdomen or chest? <input type="checkbox" name="values[]" value="risk">
</li>
<li>Do you have Headches often? <input type="checkbox"  name="values[]" value="risk">
</li>
<li>Weakness and tiredness?  <input type="checkbox"  name="values[]" value="risk">
</li>
<li>nausea and vomiting? <input type="checkbox" name="values[]" value="risk">
</li>
<li>Dry mouth and tongue and urinating less? <input type="checkbox"  name="values[]" value="risk">
</li>
<li>vomiting and diarrhoea? <input type="checkbox"  name="values[]" value="risk">
</li>
<li>Jaundice? <input type="checkbox"  name="values[]" value="symptom"> 
</li>
<li> Do you Cough? <input type="checkbox"  name="values[]" value="symptom"> 
</li>
<li>High fever rise to 104F? <input type="checkbox"  name="values[]" value="symptom">
</li>
<li> Rapid Weight loss? <input type="checkbox"  name="values[]" value="symptom">
</li>

</ol>

	<tr>
	 <td colspan="10" align="center"><input type="submit" name="send" value="Diagonise" /><input type ="reset" value="Cancel"><a href="counselor.php"><input type="button" value="Go Back"></a>
	</tr>
	<input type="hidden" name="submitted" />
													
                   
			</form>
			</table>


			<?php
			if(isset($_POST['submitted'])){
				if(!empty($_POST['values'])){
				$count =count($_POST['values']);
						
			    if($count >2){
			header("location: test.php");
			  
			}
			else{
		echo "<h4 style='color:red';> Sorry you must atleast thick three symptoms! </h4>";
		}
			if($count >=5){
				header("location: test2.php");
			}
		}
		else{
		echo "<h4 style='color:red';> you have not choosen any options</h4>";
		}
		}
	?>
	
</div>
		
<?php
	include('includes/footer.php');
	?>	
	