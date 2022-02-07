<?php
mysql_connect("localhost", "root", "");
mysql_select_db("abu_bookshop");
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
	<?php if(isset($page_title)){
				echo $page_title;
				unset($page_title);
			}
	?>
</title>
<link rel="stylesheet" type="text/css" href="style1.css" />
<script type="text/javascript" src="includes/jquery.js"></script>
<script type="text/javascript" src="includes/script.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo77">
			<img src="images/logo77.jpg" height="150px" width="932px"/>
		</div>	<div id="menu">
			<ul>
			<?php
			if(isset($_SESSION['form_id'])){
				echo'<li class="first active">';
					echo'<a href="counselor.php">Home</a>';
				echo'</li>';
			}
			else{
				echo'<li class="first active">
					<a href="home.php">Home</a>
				</li>';
			}
			
			?>
			
				
				<li>
					<a href="about.php">About HIV/AIDs</a>
				</li>
				<li>
					<a href="latestnews.php">Latest News</a>
				</li>
				<li>  <a href="logout.php"style="margin-left:30%;">Logout</a> </li>
				
				
				
				
			</ul><br class="clearfix" />
		</div>
	</div>
	<div id="page">