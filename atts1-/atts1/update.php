<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $name = $_POST['name'];

        $user_id = $_POST['user_id'];

        $course = $_POST['course'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $gender = $_POST['gender']; 

        $sql = "UPDATE `users` SET `name`='$name',`course`='$course',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";
		header("Location: view.php");

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $course = $row['course'];

            $email = $row['email'];

            $password  = $row['password'];

            $gender = $row['gender'];

            $id = $row['id'];

        } 

    ?>
	<head>
	<style>
 body{
		    background-image: url("24.jpg");
		  width:100%;
		  height:100%;
		  background-size: cover;
		   background-position: top right;
		
	}
	h2{
	 display: block;
  font-size: 3.0em;
  text-align:center;
  color:white;
  margin-top: 2.83em;
  font-weight: bold;
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
input[type=text], input[type=email], input[type=password]{
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
	</style>
</head><body>
        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

          

          <div class="col-25">
		Name:
</div>
 <div class="col-75">
            <input type="text" name="name" value="<?php echo $name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
</div>
            
 <div class="col-25">
            Course:
</div>
 <div class="col-75">

            <input type="text" name="course" value="<?php echo $course; ?>">

 </div>
  <div class="col-25">
            Email:
			</div>
			 <div class="col-75">

            <input type="email" name="email" value="<?php echo $email; ?>">
</div>
 <div class="col-25">
            Password:
</div>
 <div class="col-75">
            <input type="password" name="password" value="<?php echo $password; ?>">
</div>
       <div class="col-25">
            Gender:
			</div>
 <div class="col-75">
 
            <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male

            <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female
</div><div class="col-25">
<br><br>
            <input type="submit" value="Update" name="update">
</div>
          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 