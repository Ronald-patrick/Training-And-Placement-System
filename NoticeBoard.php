<?php
include("configuration/config1.php");
include("configuration/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>List</title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="CSSSC/StyleIndex.css">
	 <link rel="stylesheet" href="CSSSC/notice.css">
</head>
<body>

<div class="wrapper">
		<div class="sidebar">
			<h2>Eligible Student</h2>
			<ul>
				<li><a href="#"><i class="fas fa-home"></i>Notice Board</a></li>
				<li><a href="3"><i class="fas fa-user"></i>Placement Drives</a></li>
				<li><a href="EligibleStudent.php"><i class="fas fa-address-card"></i>Elgible Students</a></li>
				<li><a href="ResumeShow.php"><i class="fas fa-project-diagram"></i>Resumes</a></li>
				<!-- <li><a href="#"><i class="fas fa-blog"></i>Feedback</a></li> -->
				  <li><a href="Logout.php"><h3>LOGOUT</h3></a></li> 
			</ul> 
		</div>


		<div class="main_content">
			<!--   <div class="header"></div> -->  

			<div class="info">
<div class="be-comment-block">
	<h1 class="comments-title">Add a new Feedback</h1>
	<form class="form-block" method="POST" action="Insert_notice.php">

		<div class="row">
			<div class="col-xs-12 col-sm-6 ">
				<div class="form-group ">
					
					<input name="title" class="form-input" type="text" placeholder="Title">
				</div>
			</div>
			<div class="col-xs-120">									
				<div class="form-group">
					<textarea name="story" class="form-input" required="" placeholder="Your text"></textarea>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Add Notice</button>
		</div>
		
	</form>
</div>
				
	</div>
</div>
</div>
</body>
</html>

