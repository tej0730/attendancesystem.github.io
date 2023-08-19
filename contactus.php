<h1 style="text-align: center; font-size: 36px; color: #333;">Contact Us</h1>
<form method="post" action="submit.php">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="message">Message:</label><br>
  <textarea id="message" name="message"></textarea><br><br>
  <input type="submit" value="Submit">
</form>
<footer style="padding: 20px; text-align: center; position: absolute;
    bottom: 0;width: 100%;text-align: center; background-color: #f1f1f1;">
  Copyright &copy; Attendance System 2023
</footer>
<!-- CSS Style -->
<style>
    body {
    background: linear-gradient(to right, blue, green);
    background-repeat: no-repeat;
    background-size: cover;
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
<!-- PHP/MySQL Code 
<?php
  // Connect to database
  $conn = mysqli_connect('localhost', 'username', 'password', 'database');
  
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
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
-->