<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CS314 Final project</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img src="img/w1.jpg" style="margin-left:90px; width: 1399px " class="sha">
		
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h2> School Information</h2><br>
					<img src="img/home.jpg" class="imgs">
					<p class="para">
						School Management System is a complete School mangament syatem will help the teachers and manager to reach the<b> marks, manage student, manage exams and manage stuffs </b>easily and quicqly.
					</p>
					
					
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>