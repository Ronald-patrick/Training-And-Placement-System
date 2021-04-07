<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
</head>
<link rel="stylesheet" href="CSSSC/StyleIndex.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</style>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>Student Profile</h2>
        <ul>
           <li><a href="StudentPage.php"><i class="fas fa-user"></i>Profile</a></li>
        <li><a href="PlacementDriveS.php"><i class="fas fa-address-card"></i>Placement Drives</a></li>
        <li><a href="Resume.php"><i class="fas fa-project-diagram"></i>Uploads</a></li>
        <li><a href="newfeed.html"><i class="fas fa-blog"></i>Feedback</a></li>
        <li><a href="Logout.php"><h3>LOGOUT</h3></a></li> 
        </ul> 
       
    </div>
	<div class="main_content">
        <div class="info">
        <form method = "Post" actin="Basic1.php">
		UPLOAD RESUME <input type="file" name="Resumefile"> <br>
    </form>
		VIEW RESUME <input type="Button" name="Resumefileview" value ="View"> 
      </div>
    </div>
</div>
</body>
</html>