<?php
include("configuration/config1.php");
include("configuration/config.php");
?>

<?php
session_start();
if(isset($_POST['company_list_name'])  ){
	// $select1 = $_GET['Domain'];
	// $select2 = $_GET['Department'];
	$select3 = $_POST['company_list_name'];

	$_SESSION['select_company']  = $select3;
	// FOR DISPLAYING COMAPNY WISE 
	$company_query = "SELECT MinCGPA FROM companyreq WHERE Company = '$select3' " ;
	$result3  = mysqli_query($conn1,$company_query);
	$row_array = mysqli_fetch_array($result3);
	$min       = $row_array['MinCGPA'];

	$query2 = "SELECT Name , CGPA , Branch  FROM studentvalidate WHERE CGPA >= $min ";
	$result2 = mysqli_query($conn , $query2);
	$numrows2 = mysqli_num_rows($result2);

}
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
</head>
<body>

<div class="wrapper">
		<div class="sidebar">
			<h2>Eligible Student</h2>
			<ul>
				<li><a href="NoticeBoard.php"><i class="fas fa-home"></i>Notice Board</a></li>
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

				<div class="listshow">
					
					<table class ="table">
						<tr>
							<th>Student Name</th>
							<th>Branch</th>
							<th>CGPA</th>
						</tr>
					
						<!-- populate table from mysql database -->
						<?php

						while($row_data = mysqli_fetch_array($result2)):?>
							<tr>
								<td><?php echo $row_data['Name'];?></td>
								<td><?php echo $row_data['Branch'];?></td>
								<td><?php echo $row_data['CGPA'];?></td>
							</tr>
						<?php endwhile;?>
					</table>
				</div>
					<form name ="Export_data" method ="POST" action = "Export1.php" > 
					<button name ="Export_Excel"  id = "Export" class="btn bnt-primary" >Export Excel</button>
				</form>
			</div>
	</div>
</div>

</body>
</html>

