<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";
	  $sql1 = "DELETE FROM `attends` WHERE `id`='$user_id'";

     $result = $conn->query($sql);
	   $result = $conn->query($sql1);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
	header("Location: view.php");

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>