


<?php

include('connect.php');

include('connect.php');


    //validation of empty fields
      if(isset($_POST['signup'])){
       // $sql = "insert into admininfo(username,password,email,fname,phone,type) values('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[phone]','$_POST[type]')";
        $sql = "INSERT INTO `admininfo`(`username`,`password`, `email`, `fname`, `phone`, `type`) VALUES ('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[phone]','$_POST[type]')";
	
        $result = $conn->query($sql);
        if ($result == TRUE) {

          echo "User created successfully.";
    
        }else{
    
          echo "Error:". $sql . "<br>". $conn->error;
    
        } 
    
        $conn->close(); 
    

        //insertion of data to database table admininfo
      /*  $result = mysql_query("insert into admininfo(username,password,email,fname,phone,type) values('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[phone]','$_POST[type]')");*/

  
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">
  
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.logo {
      height: 65px;
      width: 65px;
      float: left;
    }
    .logob {
      height: 80px;
      width: 80px;
      float: left;
    }
.navbar {
	
      overflow: hidden;
      background-color: #203354;
    
    }

    .navbar a {
  
      float: right;
      margin-left: 10px;
      font-size: 20px;
      color: white;
	  font-family:"Gill Sans", sans-serif;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
	  
    }


    .navbar a:hover,
    .dropdown:hover .dropbtn {
      color:black;
    }
	h1{
	
            text-align: center;
            font-family: Segoe UI;
            font-size: 50px;
	}
  
    </style>
</head>
<body>

<header>

<div class="navbar">

    <img class="logo" src="att2.png" alt="attends">
  
     


      
      <a href="http://localhost/attendancems/signup.php">Signup</a>
      <a href="http://localhost/attendancems/login.php">Login</a>
	  
	  
      <a href="index.html">Home</a>


</div>
  <h1>Attendance Management System</h1>

</header>
<center>
<h3>Signup</h3>
<div class="content">

  <div class="row">
    <?php
    if(isset($success_msg)) echo $success_msg;
    if(isset($error_msg)) echo $error_msg;
     ?>
    <!-- Old version started -->
    <!--<form action="" method="post">
      
      <table>
        
        <tr>
          <td>Email</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="uname"></td>

        </tr>
        <tr>
          <td>Password</td>
          <td><input type="Password" name="pass"></td>
        </tr>

        <tr>
          <td>Full Name</td>
          <td><input type="text" name="fname"></td>
        </tr>

        <tr>
          <td>Phone Number</td>
          <td><input type="text" name="phone"></td>
        </tr>

        <tr>
          <td>Type</td>
          <td>      <select name="type">
        <option name="teacher" value="teacher">Teacher</option>
        <option name="student" value="student">Student</option>
      </select></td>
        </tr>

        <tr><td><br></td></tr>
        <tr>
          <td></td>
          <td><input type="submit" name="signup" value="Signup"></td>
        </tr>

      </table>
    </form>--><!-- Old version ended -->

    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">

    <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Full Name</label>
          <div class="col-sm-7">
            <input type="text" name="fname"  class="form-control" id="input1" placeholder="Fullname" required />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Phone Number</label>
          <div class="col-sm-7">
            <input type="number" name="phone"  class="form-control" id="input1" placeholder="Phone Number" required />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" name="email"  class="form-control" id="input1" placeholder="Your Email" required />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="uname"  class="form-control" id="input1" placeholder="Choose Username" required />
          </div>
      </div>

      <div class="form-group">
          <label for="input1" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-7">
            <input type="password" name="pass"  class="form-control" id="input1" placeholder="Enter Password" required />
          </div>
      </div>


      <div class="form-group" class="radio">
      <label for="input1" class="col-sm-3 control-label">User Role:</label>
      <div class="col-sm-7">
        <label>
          <input type="radio" name="type" id="optionsRadios1" value="student" checked> Student
        </label>
            <label>
          <input type="radio" name="type" id="optionsRadios1" value="teacher"> Teacher
        </label>
        <!-- <label>
          <input type="radio" name="type" id="optionsRadios1" value="admin"> Admin
        </label> -->
      </div>
      </div>

      <input type="submit" style="border-radius:0%" class="btn btn-primary col-md-2 col-md-offset-8" value="Signup" name="signup" />
    </form>
  </div>
    <br>
    <p><strong>Already have an account? <a href="login.php">Login</a> here.</strong></p>

</div>

</center>

</body>
</html>
