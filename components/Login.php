<?php
   include 'DatabaseConnection.php';
   session_start();
   // $db = new mysqli("localhost", "root", "", "genteycuidad");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
      
      $sql = "SELECT * FROM userinformation WHERE EmailID = '".$myusername."' and Password = '".$mypassword."';";
      $result = mysqli_query($conn,$sql);
	   $row = mysqli_fetch_array($result);
   
      $count = mysqli_num_rows($result);
	   $_SESSION["loggedin"] = true;
       //$_SESSION["id"] = $id;
      $_SESSION["fname"] = $row['FirstName']; 
	   $_SESSION["username"] = $myusername; 
      $_SESSION["user_id"] = $row['UserId'];
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         header("location: ./welcome_user.php");
      }else {
         // $error = "Your Login Name or Password is invalid";
         // echo $error;
         echo '<script>alert("Your Login Name or Password is invalid");history.go(-1);</script>';
         // echo '<script>location.href="./inicio_de_sesion.html";</script>';
      }
   }
?>