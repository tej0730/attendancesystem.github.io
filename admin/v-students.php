<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{

  header('location: ../index.php');
}
?>



<?php

//establishing connection
include('connect.php');

 
        //insertion of data to database table admininfo
   //     $result = mysql_query("insert into admininfo(username,password,email,fname,phone,type) values('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[phone]','$_POST[type]')");
      //  $success_msg="Signup Successfully!";
     


      
      $sql1 = "SELECT * FROM students ORDER BY st_name asc";
      
      $res = $conn->query($sql1);
      
  
       /* $sql = "INSERT INTO `admininfo`(`username`,`password`, `email`, `fname`, `phone`,`type`) VALUES ('$_POST[uname]','$_POST[pass]','$_POST[email]','$_POST[fname]','$_POST[phone]','$_POST[type]')";
	
        $result = $conn->query($sql);
        if ($result == TRUE) {

          echo "student created successfully.";
    
        }else{
    
          echo "Error:". $sql . "<br>". $conn->error;
    
        } 
    
        $conn->close();
*/
  


?>

<!DOCTYPE html>
<html lang="en">

<!-- head started -->
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Optional theme -->
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
   
    </header>
    <!-- Menus ended -->

<center>
<h1>All Students</h1>

<div class="content">

  <div class="row">
   
    <table class="table table-striped table-hover">
      
        <thead>
        <tr>
          <th scope="col">Registration No.</th>
          <th scope="col">Name</th>
       
          <th scope="col">Batch</th>
          <th scope="col">Semester</th>
          <th scope="col">Email</th>
        </tr>
        </thead>
     <?php
       /*
       $i=0;
       
       $all_query = "SELECT * from students ORDER BY st_id asc";
       
       $res = $conn->query($all_query);while ($data = mysql_fetch_array($all_query))*/
       //if ($res->num_rows >0){
      // while ($data = $res->fetch_assoc())  {/*while ($row = $result->fetch_assoc()) {

        /*?>*/
 //        $i++;
         /*<?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>
 */
       
       ?>
       <?php

if ($res->num_rows > 0) {

    while ($data = $res->fetch_assoc()) {

?>

<tr>
         <td><?php echo $data['st_id']; ?></td>
         <td><?php echo $data['st_name']; ?></td>
  
         <td><?php echo $data['st_batch']; ?></td>
         <td><?php echo $data['st_sem']; ?></td>
         <td><?php echo $data['st_email']; ?></td>
       </tr>                  

<?php       }

}

?>   

      </table>
    
  </div>
    

</div>

</center>

</body>
<!-- Body ended  -->

</html>
