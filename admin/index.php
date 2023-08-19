<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{

  header('location: ../index.php');
}
?>

<?php

include('connect.php');

//data insertion
  

    //checking if the data comes from students form
    if(isset($_POST['std'])){

      //students data insertion to database table "students"
       // $result = mysql_query("insert into students(st_id,st_name,st_batch,st_sem,st_email) values('$_POST[st_id]','$_POST[st_name]','$_POST[st_batch]','$_POST[st_sem]','$_POST[st_email]')");
        //$success_msg = "Student added successfully.";

        $sql = "INSERT INTO `students`(`st_id`,`st_name`, `st_batch`, `st_sem`, `st_email`) VALUES ('$_POST[st_id]','$_POST[st_name]','$_POST[st_batch]','$_POST[st_sem]','$_POST[st_email]')";
	
        $result = $conn->query($sql);
        if ($result == TRUE) {

          echo "student created successfully.";
    
        }else{
    
          echo "Error:". $sql . "<br>". $conn->error;
    
        } 
    
        $conn->close(); 
    

    }

        //checking if the data comes from teachers form
        if(isset($_POST['tcr'])){
          $sql1 = "INSERT INTO `teachers`(`tc_id`,`tc_name`, `tc_email`, `tc_course`) VALUES ('$_POST[tc_id]','$_POST[tc_name]','$_POST[tc_email]','$_POST[tc_course]')";
          $res = $conn->query($sql1);
          if ($res == TRUE) {
  
            echo "teacher created successfully.";
      
          }else{
      
            echo "Error:". $sql1 . "<br>". $conn->error;
      
          } 
      
          $conn->close();
          //teachers data insertion to the database table "teachers"
         // $res = mysql_query("insert into teachers(tc_id,tc_name,tc_email,tc_course) values('$_POST[tc_id]','$_POST[tc_name]','$_POST[tc_email]','$_POST[tc_course]')");
          
          //$success_msg = "Teacher added successfully.";
    }


  

 ?>



<!DOCTYPE html>
<html lang="en">
<!-- head started -->
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/main.css">

  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

  .message{
    padding: 10px;
    font-size: 15px;
    font-style: bold;
    color: black;
  }
</style>
</head>
<!-- head ended -->

<!-- body started -->
<body>

    <!-- Menus started-->
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
          <a class="nav-link active" aria-current="page" href="signup.php">Create Users</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Add Student/Teacher</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="v-students.php">View Students</a>
        </li>
   
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="v-teachers.php">View teachers</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
        </li>
   
   
   </div> 
</nav>
      
    </header>
    <!-- Menus ended -->

<center>
<!-- Error or Success Message printint started -->

<p class="text" id="mssg"><i class="fa-solid fa-circle-check" style="color:green;"></i> You have successfully logged in!!!</p>

<script>
setTimeout(() => {
  const box = document.getElementById('mssg');

  //element remove karse
  box.style.display = 'none';

}, 2500); // time 2.5 secs
</script>

<div class="content">

  <center> Select: <a href="#teacher">Teacher</a> | <a href="">Student</a> <br></center>

  <div class="row" id="student">



      <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
      <h4>Add Student's Information</h4>
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Reg. No.</label>
          <div class="col-sm-7">
            <input type="text" name="st_id"  class="form-control" id="input1" placeholder="student reg. no." required />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-7">
            <input type="text" name="st_name"  class="form-control" id="input1" placeholder="student full name" required />
          </div>
      </div>

      

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Batch</label>
          <div class="col-sm-7">
            <input type="text" name="st_batch"  class="form-control" id="input1" placeholder="batch e.x 2020" required />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Semester</label>
          <div class="col-sm-7">
            <input type="number" name="st_sem"  class="form-control" id="input1" placeholder="semester ex. Fall-15" required />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="st_email"  class="form-control" id="input1" placeholder="valid email" required />
          </div>
      </div>


      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-8" value="Add Student" name="std" />
    </form>

  </div>
<br><br><br>
  <div class="rowtwo" id="teacher">
  

       <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
        <h4>Add Teacher's Information</h4>
      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Teacher ID</label>
          <div class="col-sm-7">
            <input type="text" name="tc_id"  class="form-control" id="input1" placeholder="teacher's id" required />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-7">
            <input type="text" name="tc_name"  class="form-control" id="input1" placeholder="teacher full name" required />
          </div>
      </div>

      
    

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="tc_email"  class="form-control" id="input1" placeholder="valid email" required />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Subject Name</label>
          <div class="col-sm-7">
            <input type="text" name="tc_course"  class="form-control" id="input1" placeholder="subject ex. Software Engineering" required />
          </div>
      </div>

      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-8" value="Add Teacher" name="tcr" />
    </form>
    
  </div>


</div><br>
<!-- Contents, Tables, Forms, Images ended -->

</center>
</body>
<!-- Body ended  -->
</html>
