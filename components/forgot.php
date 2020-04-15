<?php
include 'DatabaseConnection.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $sql = "SELECT Password FROM userinformation WHERE EmailID = '".$myusername."';";
      $result =  mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $count = mysqli_num_rows($result);

      if($count == 1)
      {
      	$msg = "Your Password is ".$row['Password'].", Use it for login /n thankyou!! ";
      	mail($email,"Forgot Password",$msg);
      	echo '<script>alert("Password has been send to your mail");</script>';
        echo '<script>location.href="./inicio_de_sesion.php";</script>';

      }
      else
      {
      	echo '<script>alert("Account not Found");</script>';
         echo '<script>location.href="./inicio_de_sesion.php";</script>';
      }
}
?>