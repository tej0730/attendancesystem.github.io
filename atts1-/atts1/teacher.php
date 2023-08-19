<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $course = $_POST['course'];

    $gender = $_POST['gender'];

    $rollno = $_POST['rollno'];

    $sql = "INSERT INTO `stu`(`firstname`, `lastname`, `email`, `course`, `gender`,`rollno`) VALUES ('$first_name','$last_name','$email','$course','$gender','$rollno')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "Student added successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>



<!DOCTYPE html>

<html>

<body>



</form>

</body>

</html>