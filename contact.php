<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;background-color:#8EE4AF;}
* {box-sizing: border-box;}

input[type=text],[type=email], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] 
{
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

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
  
  form {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f1f1f1;
  }
  label {
    display: block;
    margin-bottom: 10px;
    color: #333;
  }
  input[type="text"], input[type="email"], textarea {
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    background-color: #fff;
  }
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
  }
</style>
</head>
<body>


<div class="navbar">

    <img class="logo" src="att2.png" alt="attends">
  
     


       <a href="http://localhost/attendancems/signup.php">Signup</a>
      <a href="http://localhost/attendancems/login.php">Login</a>
	  
      <a href="index.html">Home</a>

</div>
<h1 style="text-align:center;">Contact Us:</h1>
<form method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message:</label><br>
  <textarea id="message" name="message"></textarea><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>

<!-- PHP/MySQL Code 
<?php
  // Connect to database
  include('connect.php');  
  // Check connection
  
  // Check if form was submitted
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    // Escape user input to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    // Insert data into database
    $sql = "INSERT INTO form_data (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
  
  // Close connection
  mysqli_close($conn);
?>