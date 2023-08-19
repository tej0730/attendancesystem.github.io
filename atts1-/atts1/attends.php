<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $name = $_POST['name'];

        $user_id = $_POST['user_id'];

        $course = $_POST['course'];

        $date = $_POST['date'];

        $attends = $_POST['attends'];


        $sql = "UPDATE `attends` SET `attends`='$attends',`date`=current_timestamp() WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";
		header("Location: index.php");

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `attends` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
			 $id = $row['id'];

            $name = $row['name'];

            $course = $row['course'];

            $attends = $row['attends'];

$date=$row['date'];



           

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
	h2 {
            text-align: center;
            font-family: Segoe UI;
			color : white;
			 font-family: 'Franklin Gothic';
            font-size: 30px;
        }
.col-25 {
  float: left;
  width: 15%;
  margin-top: 6px;
 font-size:20px ;
 font-family: Helvetica, sans-serif;;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 8px;
  font-size:20px ;
   font-family: Helvetica, sans-serif;;

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
fieldset {
  background-color:#c8e1cc;
  padding:30px;
  border:3px solid black;
	margin:auto;
  
}
 input[type=submit]{
	  background-color: #04AA6D;
  border: none;
  color: black;
  padding: 10px 20px;
  text-decoration: none;
 
  cursor: pointer;
 }
	</style>
	</head>

        <h2>Attendance Form</h2>
<div class="card">
        <form action="" method="post">

          <fieldset>

          
			 <!--<label for="date">date:</label>
<input type="date" id="date" name="date" value="<?php echo date('yyyy-mm-dd'); ?>">	-->
 <!-- <input type="date" id="date"  name="arrive" value="<?php echo date('Y-m-d'); ?>"> -->


          <div class="col-25"> Name:
		  </div>
		 
<div class="col-75">
            <?php echo $name; ?>
		
           <input type="hidden" name="user_id" value="<?php echo $id; ?>">
</div>
<br><br>	

<div class="col-25">           
  Course:
 </div>
 <div class="col-75">
  <?php echo $course; ?>
</div>
<BR><BR>

<div class="col-25">
            date:
</div>
<div class="col-75">
           <?php echo $date; ?>
</div>
<BR><BR>

<div class="col-25">
            Attendance:
</div>
<div class="col-75">
            <input type="radio" name="attends" value="present" <?php if($attends == 'present'){ echo "checked";} ?> >present

            <input type="radio" name="attends" value="absent" <?php if($attends == 'absent'){ echo "checked";} ?>>absent
</div>			<br>
           

           
<br>	
       <br>
	   <br>
			
<input type="submit" value="submit" name="update">
   </fieldset>
   </div>
        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: index.php');

    } 

}

?> 