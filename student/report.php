
<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: login.php');
}
?>
<?php include('connect.php');?>

<!DOCTYPE html>
<html lang="en">

<!-- head started -->
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">
  
<link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<header>

  <h1>Attendance Management System</h1>
  
  <nav class="navbar navbar-expand-lg navbar-dark" style= "background-color: #203354;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="students.php">Students</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="report.php">Report Section</a>
        </li>
     
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
        </li>  
  </header>
<center>

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="row">

  <div class="content">
    <h3>Student Report</h3>
    <br>
    <form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
  <div class="form-group">

    <label  for="input1" class="col-sm-3 control-label">Select Subject</label>
      <div class="col-s-4">
        <br>
      <select style="text-align:center;" name="whichcourse" id="input1" >
         <option  value="OOCP">OBJECT ORIENTED CONCEPTS AND PROGRAMMING</option>
			  <option  value="OOCP_PRAC">OBJECT ORIENTED CONCEPTS AND PROGRAMMING PRACTICAL</option>
         <option  value="SF">STATISTICAL FOUNDATION</option>
        <option  value="DBMS">DATABASE MANAGEMENT SYSTEM</option>
        <option  value="DBMS_PRAC">DATABASE MANAGEMENT SYSTEM PRACTICAL</option>
        <option  value="ENG">GENERAL ENGLISH</option>
        <option  value="OS">OPEN-SOURCE SOFTWARE</option>


      </select>
      </div>

  </div>
<br>
        <div class="form-group">
           <label for="input1" class="col-sm-3 control-label">Your Reg. No.</label>
              <div class="col-sm-7">
                <br>
                  <input type="text" name="sr_id"  class="form-control" id="input1" placeholder="enter your reg. no." />
              </div>
        </div>
        <br>
        <input type="submit" class="btn btn-danger col-md-3 col-md-offset-7" style="border-radius:0%" value="Find" name="sr_btn" />
    </form>

    <div class="content"><br></div>

		<form method="post" action="" class="form-horizontal col-md-6 col-md-offset-3">
    <table class="table table-striped">
        <?php
        // Check if the form has been submitted
        if (isset($_POST['sr_btn'])) {
            // Initialize the variables
            $sr_id = $_POST['sr_id'];
            $course = $_POST['whichcourse'];
            $i = 0;
            $count_pre = 0;

            // Connect to the database


            // Select the attendance records for the given student and course
            $all_query = $conn->query("SELECT stat_id, COUNT(*) AS countP FROM attendance WHERE attendance.stat_id='$sr_id' AND attendance.course='$course' AND attendance.st_status='Present'");
            // Select the total number of attendance records for the given student and course
            $singleT = $conn->query("SELECT COUNT(*) AS countT FROM attendance WHERE attendance.stat_id='$sr_id' AND attendance.course='$course'");

            // Store the total number of attendance records
           

		  $count_tot = 0;
            if ($row = $singleT->fetch_row()) {
                $count_tot = $row[0];
            }

            // Iterate over the attendance records
            while ($data = $all_query->fetch_array()) {
                $i++;
                // Count the number of "Present" records
                // if ($data['st_status'] == "Present") {
                //     $count_pre++;
                // }
                if ($i <= 1) {
                    ?>
                    <tbody>
                        <tr>
                            <td>Registration No.: </td>
                            <td><?php echo $data['stat_id']; ?></td>
		  <tr>
			<td>Total Class (Days): </td>
			<td><?php echo $count_tot; ?> </td>
		  </tr>

		  <tr>
			<td>Present (Days): </td>
			<td><?php echo $data[1]; ?> </td>
		  </tr>

		  <tr>
			<td>Absent (Days): </td>
			<td><?php echo $count_tot -  $data[1]; ?> </td>
		  </tr>
		  <tr>
			<td>Percent (Days): </td>
			<td><?php echo $data[1]/$count_tot *100; ?>% </td>
		  </tr>	
		</tbody>

	   <?php

		 }  
		}}
		 ?>
		</table>
	  </form>
  </div>

</div>
<!-- Contents, Tables, Forms, Images ended -->

</center>

</body>


</html>
