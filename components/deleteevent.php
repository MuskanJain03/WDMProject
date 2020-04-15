<?php
include 'DatabaseConnection.php';
session_start();
$EventId= $_GET["event_id"];
$UserId = $_SESSION["user_id"];
$sql = "Delete from activity where EventId='".$EventId."' and UserId = '".$UserId."'";
echo $sql;
$result = mysqli_query($conn,$sql);
  
if($result)
{
  header("location: ./activities.php");
}
else{
  header("location: ./activities.php");
}
