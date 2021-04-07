 <?php

 session_start();

 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
 {
   header("location: login-page.php");
 }
 $un = $_SESSION['user'];
 $connect = mysqli_connect("localhost", "root", "", "user");
 $query = "SELECT * FROM studentvalidate WHERE username = '$un' ";
 $result = mysqli_query($connect,$query);
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Student page</title>
 <!--  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
  <link rel="stylesheet" href="CSSSC/StyleIndex.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <div class="wrapper">
    <div class="sidebar">
      <h2>Student Profile</h2>
      <ul>
        <!-- <li><a href="Hoe"><i class="fas fa-home"></i>Home</a></li> -->
        <li><a href="StudentPage.php"><i class="fas fa-user"></i>Profile</a></li>
        <li><a href="PlacementDriveS.php"><i class="fas fa-address-card"></i>Placement Drives</a></li>
        <li><a href="Resume.php"><i class="fas fa-project-diagram"></i>Uploads</a></li>
        <li><a href="newfeed.html"><i class="fas fa-blog"></i>Feedback</a></li>
        <li><a href="Logout.php"><h3>LOGOUT</h3></a></li> 
      </ul> 

    </div>
    <div class="main_content">
      <div class="header"></div>  
      <div class="info">
        <table>
          <?php
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
              <th>Name :</th>
              <td><?php  echo $row['Name']?></td>
            </tr>
            <tr>
              <th>Branch :</th>
              <td><?php  echo $row['Branch']?></td>
            </tr>
            <tr>
              <th>Email :</th>
              <td><?php  echo $row['Email']?></td>
            </tr>
            <tr>
              <th>Roll no :</th>
              <td><?php  echo $row['roll_no']?></td>
            </tr>
            <tr>
              <th>CGPA :</th>
              <td><?php  echo $row['CGPA']?></td>
            </tr>
            <tr>
              <th>DOB :</th>
              <td><?php  echo $row['dob']?></td>
            </tr>
            <tr>
              <th>Course:</th>
              <td><?php  echo $row['course']?></td>
            </tr>
            <?php
          }
          ?> 
        </table>
      </div>
    </div>
  </div>
</body>
</html>