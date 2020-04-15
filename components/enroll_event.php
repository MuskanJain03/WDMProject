<?php
include 'DatabaseConnection.php';
session_start();
$user_id =  $_SESSION['user_id'];
$event_id =  $_GET['event_id'];
$sql2 = "SELECT * FROM activity WHERE UserId = ".$user_id." and EventId = ".$event_id;

$result2 = mysqli_query($conn,$sql2);
$count = mysqli_num_rows($result2);

if($count == 0)
{
	$sql = "INSERT INTO activity(UserId, EventId) VALUES (".$user_id.",".$event_id.")";
	$result = mysqli_query($conn,$sql);
	  
	if($result)
	{
	  header("location: ./activities.php");
	}
	else{

	  header("location: ./EventsDisplay.php");

	}
}
else
{
	header("location: ./activities.php");	
}


?>
