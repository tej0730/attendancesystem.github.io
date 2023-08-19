<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: login.php');
}
?>
<?php include('connect.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Attendance Management System</title>
<meta charset="UTF-8">
  
<link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="students.php">Students</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="report.php">Report Section</a>
        </li>
      
      
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
        </li>  

</div>

</header>

<center>

<div class="row">

  <div class="content">
    <h3>Student List</h3>
    <br>
    <form method="post" action="">
      <label>Batch</label>
      <input type="text" name="sr_batch">
      <input type="submit" name="sr_btn" class="btn btn-danger" style="border-radius:0%" value="Search" >
    </form>
    <br>
    <table class="table table-stripped table-hover">
      <thead>
        <tr>
          <th scope="col">Registration No.</th>
          <th scope="col">Name</th>
      
          <th scope="col">Batch</th>
          <th scope="col">Semester</th>

        </tr>
      </thead>

   <?php

    if(isset($_POST['sr_btn'])){
      $i=0;
      $srbatch = $_POST['sr_batch'];
      $sql1 = "SELECT * FROM students where students.st_batch = '$srbatch' order by st_id asc ";
      
      $res = $conn->query($sql1);
     
    
     
     
    // $all_query = mysql_query("select * from students where students.st_batch = '$srbatch' order by st_id asc ");
     
    
if ($res->num_rows > 0) {

  while ($data = $res->fetch_assoc()) {

?>

<tr>
       <td><?php echo $data['st_id']; ?></td>
       <td><?php echo $data['st_name']; ?></td>

       <td><?php echo $data['st_batch']; ?></td>
       <td><?php echo $data['st_sem']; ?></td>
     </tr>                  

<?php       }

}
    }

?>   
      
    </table>

  </div>

</div>

</center>

</body>
</html>
