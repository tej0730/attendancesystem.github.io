<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: login.php');
}
?>

<?php
    include('connect.php');
  
      
    if(isset($_POST['att'])){

      $course = $_POST['whichcourse'];

      foreach ($_POST['st_status'] as $i => $st_status) {
        
        $stat_id = $_POST['stat_id'][$i];
        $dp = date('Y-m-d');
        $course = $_POST['whichcourse'];
        
      // $stat = mysql_query("insert into attendance(stat_id,course,st_status,stat_date) values('$stat_id','$course','$st_status','$dp')");
        $stat = "INSERT INTO `attendance`(`stat_id`,`course`, `st_status`, `stat_date`) VALUES ('$stat_id','$course','$st_status','$dp')";
        $result = $conn->query($stat);
        if ($result == TRUE) {

          echo "Attendance Submitted!";
    
        }else{
    
          echo "Error:". $stat . "<br>". $conn->error;
    
        } 
    
       
     
        /* $sql = "INSERT INTO `students`(`st_id`,`st_name`, `st_batch`, `st_sem`, `st_email`) VALUES ('$_POST[st_id]','$_POST[st_name]','$_POST[st_batch]','$_POST[st_sem]','$_POST[st_email]')";
	
        $result = $conn->query($sql);
        if ($result == TRUE) {

          echo "student created successfully.";
    
        }else{
    
          echo "Error:". $sql . "<br>". $conn->error;
    
        } 
    
        $conn->close(); 
    */
   
      }

      $conn->close();

    }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   
  <!-- Optional theme -->

   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
  .status{
    font-size: 10px;
  }

</style>

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
          <a class="nav-link active" aria-current="page" href="teachers.php">Faculties</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="attendance.php">Attendance</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="report.php">Report</a>
        </li>
   
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view.php">View attendance</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
        </li>
   
   
   </div>
</nav>
  
</header>

<center>

<div class="row">

  <div class="content">
    <h3>Attendance of <?php echo date('d-m-Y'); ?></h3>
    <br>

    <center><p><?php if(isset($att_msg)) echo $att_msg; if(isset($error_msg)) echo $error_msg; ?></p></center> 
    
    <form action="" method="post" class="form-horizontal col-md-6 col-md-offset-3">

     <div class="form-group">



                <label>Enter Batch</label><br>
                <input type="text" name="whichbatch" id="input2" placeholder="2021">
              </div>
    <br>
   <input type="submit" class="btn btn-danger col-md-2 col-md-offset-5" style="border-radius:0%" value="Search" name="batch" /><br>

    </form>

    <br><br>
    <form action="" method="post">

      <div class="form-group">

        <label >Select Subject</label>
              <select name="whichcourse" id="input1">
              <option  value="OOCP">OBJECT ORIENTED CONCEPTS AND PROGRAMMING</option>
			      <option  value="OOCP_PRAC">OBJECT ORIENTED CONCEPTS AND PROGRAMMING PRACTICAL</option>
         <option  value="SF">STATISTICAL FOUNDATION</option>
        <option  value="DBMS">DATABASE MANAGEMENT SYSTEM</option>
        <option  value="DBMS_PRAC">DATABASE MANAGEMENT SYSTEM PRACTICAL</option>
        <option  value="ENG">GENERAL ENGLISH</option>
        <option  value="OS">OPEN-SOURCE SOFTWARE</option>

              </select>

      </div>
<br>
    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">Reg. No.</th>
          <th scope="col">Name</th>

          <th scope="col">Batch</th>
          <th scope="col">Semester</th>
          <th scope="col">Email</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
   <?php

    if(isset($_POST['batch'])){


     $i=0;
    
      
    
     $radio = 0;
     $batch = $_POST['whichbatch'];
     $sql1 = "SELECT * FROM students where students.st_batch = '$batch' order by st_id asc";
     $res = $conn->query($sql1);
     if ($res->num_rows > 0) {
     
   //  $all_query = mysql_query("select * from students where students.st_batch = '$batch' order by st_id asc");

     while ($data = $res->fetch_assoc()) {
      
      
     ?>
  <body>
     <tr>
       <td><?php echo $data['st_id']; ?> <input type="hidden" name="stat_id[]" value="<?php echo $data['st_id']; ?>"> </td>
       <td><?php echo $data['st_name']; ?></td>
 
       <td><?php echo $data['st_batch']; ?></td>
       <td><?php echo $data['st_sem']; ?></td>
       <td><?php echo $data['st_email']; ?></td>
       <td>
         <label>Present</label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Present" checked >
         <label>Absent </label>
         <input type="radio" name="st_status[<?php echo $radio; ?>]" value="Absent" >
       </td>
     </tr>
  </body>

     <?php 
     $i++;
     $radio++; }

        
      } 
}
      ?>
    </table>

    <center><br>
    <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Submit" name="att" />
  </center>

</form>
  </div>

</div>

</center>

</body>
</html>
