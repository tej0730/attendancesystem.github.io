<?php

if(isset($_POST['login']))
{
	//start of try block


		//establishing connection with db and things
		include ('connect.php');
		
		//checking login info into database
		$row=0;
		
$sql = "SELECT * FROM admininfo where username='$_POST[username]' and password='$_POST[password]' and type='$_POST[type]'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

	$row = $result->fetch_assoc();


	if($row>0 && $_POST["type"] == 'teacher'){
		session_start();
		$_SESSION['name']="oasis";
		header('location: teacher/index.php');
	}

	else if($row>0 &&  $_POST["type"] == 'student'){
		session_start();
		$_SESSION['name']="oasis";
		header('location: student/index.php');
	}

	else if($row>0 && $_POST["type"] == 'admin'){
		session_start();
		$_SESSION['name']="oasis";
		header('location: admin/index.php');
	}

	else{
		echo "Username,Password or Role is wrong, try again!" ;
		
		header('location: login.php');
	}

	/*	$result=mysql_query("select * from admininfo where username='$_POST[username]' and password='$_POST[password]' and type='$_POST[type]'");

		 $row=mysql_num_rows($result);

		/*if($row>0 && $_POST["type"] == 'teacher'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: teacher/index.php');
		}

		else if($row>0 &&  $_POST["type"] == 'student'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: student/index.php');
		}

		else if($row>0 && $_POST["type"] == 'admin'){
			session_start();
			$_SESSION['name']="oasis";
			header('location: admin/index.php');
		}

		else{
			throw new Exception("Username,Password or Role is wrong, try again!");
			
			header('location: login.php');
		}*/
	}
}



?>

<!DOCTYPE html>
<html>
<head>

	<title>Attendance Management System</title>
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
	<center>

<header>

<div class="navbar">

    <img class="logo" src="att2.png" alt="attends">
  
     


      
      <a href="http://localhost/attendancems/signup.php">Signup</a>
      <a href="http://localhost/attendancems/login.php">Login</a>
	  
	  
      <a href="index.html">Home</a>

</div>
  <h1>Attendance Management System</h1>

</header>

<h3>Login Panel</h3>



<div class="content">
	<div class="row">

		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Username</label>
			    <div class="col-sm-7">
			      <input type="text" name="username"  class="form-control" id="input1" placeholder="Your Username" required />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-3 control-label">Password</label>
			    <div class="col-sm-7">
			      <input type="password" name="password"  class="form-control" id="input1" placeholder="Your Password" required  />
			    </div>
			</div>


			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-3 control-label">Login As:</label>
			<div class="col-sm-6">
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="student" checked> Student
			  </label>
			  	  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="teacher"> Teacher
			  </label>
			  <label>
			    <input type="radio" name="type" id="optionsRadios1" value="admin"> Admin
			  </label>
			</div>
			</div>


			<input type="submit" class="btn btn-success col-md-3 col-md-offset-7" style="border-radius:0%" value="Login" name="login" />
		</form>
	</div>
</div>


<p><strong><a href="signup.php" style="text-decoration:none;">Create New Account</a></strong></p>

</center>
</body>
</html>