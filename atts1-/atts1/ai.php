<?php 

include "config.php";

$sql = "SELECT * FROM attends where course='MSCAI'";

$result = $conn->query($sql);

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

#stu {
  font-family:'Times New Roman', serif;
  font-size :large;
  border-collapse: collapse;
  width: 100%;
}

#stu td, #stu th {
  border: 1px solid black;
  padding: 8px;
  background-color: #c8e1cc;
  
}



#stu tr:hover {color: red;}

#stu th {
	font-size:25px;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
 background-color:#336092;
  color: white;
}
h2{
	 display: block;
  font-size: 3.0em;
  text-align:center;
  color : white;
  margin-top: 2.83em;
  font-weight: bold;
}
h4{
	display: block;
  font-size: 1.3em;
 
  margin-bottom: 1.33em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
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
</style>    <title>View Page</title>


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

    <div class="container">

        <h2>MSC AI ML</h2>
		<?php
echo "<h4>Today is ". date("Y-m-d"). "<br>";
echo "Day is " . date("l")."</h4>";
?>


<table id="stu">

    <thead>

        <tr>	


        <th>ID</th>

        <th>Name</th>

        <th>Course</th>

 

        <th>Attendance</th>
		<th>Action</th>
    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                     <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['course']; ?></td>



<td><?php echo $row['attends']; ?></td>
                    <td><a class="btn btn-info" href="attends.php?id=<?php echo $row['id']; ?>">Mark Attendance</a>&nbsp;
                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>