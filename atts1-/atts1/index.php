		<?php 

	include "config.php";

	  if (isset($_POST['submit'])) {

		 $name = $_POST['name'];
		
		$user_id = $_POST['user_id'];

		$course = $_POST['course'];

		$email = $_POST['email'];

		$password = $_POST['password'];

		$gender = $_POST['gender'];

		$sql = "INSERT INTO `users`(`name`,`id`, `course`, `email`, `password`, `gender`) VALUES ('$name','$user_id','$course','$email','$password','$gender')";
		$sql1= "INSERT INTO `attends`(`id`,`name`, `course`) VALUES ('$user_id','$name','$course')";

		$result = $conn->query($sql);
		$result = $conn->query($sql1); 

		if ($result == TRUE) {

		  echo "User created successfully.";

		}else{

		  echo "Error:". $sql . "<br>". $conn->error;

		} 

		$conn->close(); 

	  }

	?>

	<!DOCTYPE html>

	<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<style>
	  body{
		   background-image: url("24.jpg");
		  width:100%;
		  height:100%;
	
		  background-size: cover;
		   background-position: top right;

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
      background-image: #66b2b2;
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

    .dropdown {
      float: right;
      overflow: hidden;}

    .navbar a:hover,
    .dropdown:hover .dropbtn {
      color:black;
    }

		option{
			 background-color:#f1f1f1;
			color: black;
			width:70%;
		
			}
	select {
  width: 71%;
  padding: 10px 10px;
  
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;}
  
button{
	background-color: #04AA6D;
  border: none;
  color: black;
  
  padding: 10px 20px;
  text-decoration: none;
  margin: 2px 2px;
  cursor: pointer;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: black;
  padding: 10px 20px;
  text-decoration: none;
  margin: 2px 2px;
  cursor: pointer;
}
input[type=text], input[type=email],input[type=password]{
	text-align:left;
	border: none;
  background-color: #f1f1f1;
  color: black;
  width: 60%;
  padding: 10px 10px;
  border: none;
  border-radius: 4px;
  text-decoration: none;
  margin: 2px 2px;
}
p{
    font-family: Arial, Helvetica, sans-serif;
    display: block;

  margin-top: 1em;
  margin-bottom: 1em;
  margin-left: 0.1em;
  margin-right: 0.1em;
  letter-spacing: 1px;
  line-height: 10pt;
}
h2 {
            text-align: center;
            font-family: Segoe UI;
			color : white;
			 font-family: 'Franklin Gothic';
            font-size: 30px;
        }
		
select {
  width: 40%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
	
		
.col-25 {
  float: left;
  width: 15%;
  margin-top: 6px;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 2px;
}
fieldset {
  background-color:#c8e1cc;
  padding:30px;
  border:3px solid black;
	margin:auto;
  
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 90%;
  margin:auto;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
img{
 
	height:80%;
	 margin: -341px 40px 7px 0px;
}
		 
		  
	</style>
	</head>
	<body>
		<div class="navbar">

    <img class="logo" src="att2.png" alt="attends">
    <div class="dropdown">
 

      <a href="http://localhost/atts1/">Login</a>
	       <a href="http://localhost/atts1/email.php">Email</a>
    
      <a href="home%20(2).html">Home</a>

      </div>
  </div>
  

	<h2>Signup Form</h2>
<div class="card">
	
	<form action="" method="POST">

	  <fieldset>
	 

	
<p>
<div class="col-25">
		Name:
</div>
<div class="col-75">
		<input type="text" name="name" required></p>
		</div>

		<p><div class="col-25" >ID:
	</div>
	<div class="col-75">
		<input type="text" name="user_id" required></p>
</div>
<div class="col-25">
		 <label for="course"><p>Choose Course:</label>
		</div>
		<div class="col-75">
	<select name="course">
	  <option value="MSC">MSC</option>
	  <option value="MCA">MCA</option>
	  <option value="PGDCA">PGDCA</option>
	  <option value="MSCAI">MSC AI ML</option>
	</select></p>
	</div>
		
<div class="col-25">
		<p>Email:
</div>

<div class="col-75">
		<input type="email" name="email" required></p>
	
</div>

<div class="col-25">
		<p>Password:
</div>
<div class="col-75">
		<input type="password" name="password" required></p>
</div>	

<div class="col-25">
		<p>Gender:
</div>
<div class="col-75">
<br>
		<input type="radio" name="gender" required value="Male">Male

		<input type="radio" name="gender" value="Female">Female</p>
</div>
	<br><br>
<div class="col-25">
<br><br>
		
		<input type="submit" name="submit" value="submit">
<a  class ="" href="view.php">view</a>
</div>
 <img align="right" src="1.jpg">
	  </fieldset>

	</form>
	</div>
	<!--<p>Courses:</p>
	<a class="btn btn-info" href="mca.php">MCA</a>
	<BR><BR>
	<a class="btn btn-info" href="msc.php">MSC</a>
	<BR><BR>
	<a class="btn btn-info" href="pg.php">PGDCA</a>
	<BR><BR>
	<a class="btn btn-info" href="ai.php">MSC AI ML</a>
	<BR><BR>
--!>
	</body>

	</html>