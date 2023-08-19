
<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>



<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">
  <!-- Latest compiled and minified CSS -->  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    

   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<style>
h2 {
  font-size: 2em;
  font-family: Arial, sans-serif;
  color: #333;
  text-align: center;
  margin: 0.5em 0;
}



</style>

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
          <a class="nav-link active" aria-current="page" href="teachers.php">Faculties</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="attendance.php">Attendance</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="report.php">Report</a>
        </li>
   
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view.php">View attendance</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
        </li>
   
   
   </div>
</nav> 
  </header>
</nav>

<h2>Your Search Results</h2>
 <input class="btn btn-secondary  type="button" value="Back" onclick="history.back()">

<?php
if (isset($_POST['submit'])) {
  $search = $_POST['search'];

  // Connect to the database
  $conn = new mysqli('localhost', 'root', '', 'attmgsystem');

  // Search the records
  $query = "SELECT * FROM attendance WHERE course LIKE '%$search%' or stat_id LIKE '%$search%' or st_status LIKE '%$search%' or stat_date LIKE '%$search%' ";
  $result = $conn->query($query);
?>
<table class="table table-hover table-bordered">

    <thead>
	
  </div>

        <tr>	

        <th>ID</th>

     

        <th>Subject</th>

 

        <th>Attendance</th>
		<th>Date</th>

    </tr>

    </thead>

    <tbody> 
	

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>
	
                    <tr>
   
                    <td><?php echo $row['stat_id']; ?></td>


					
                    <td><?php echo $row['course']; ?></td>
										
					<td><?php echo $row['st_status']; ?></td>
					<td><?php echo $row['stat_date']; ?></td>

                    </tr>                       

        <?php       }

            }
			else {
    echo "<tr><td colspan='5'>No results found.</td></tr>";
  }
}

        ?>                

    </tbody>

</table>
