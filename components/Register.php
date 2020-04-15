<?php
include 'DatabaseConnection.php';
$fname = $conn->real_escape_string($_REQUEST['fname']);
$lname = $conn->real_escape_string($_REQUEST['lname']);
$gender = $conn->real_escape_string($_REQUEST['gender']);
$email = $conn->real_escape_string($_REQUEST['email']);
$password = $conn->real_escape_string($_REQUEST['psw']);


$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$numberFirstName    = preg_match('@[0-9]@', $fname);
$numberLastName    = preg_match('@[0-9]@', $lname);
$specialChars = preg_match('@[^\w]@', $password);


if(strlen($password) > 6 && $uppercase && $lowercase && $number && $specialChars && $numberLastName == False && $numberFirstName == False )
{
	$sql = "INSERT INTO UserInformation (FirstName,LastName,Gender,EmailId,Password) VALUES ('$fname','$lname','$gender','$email','$password')";
	$msg ="Hello".$fname."".$lname."!\n"."Welcome to Genete & Ciudad \n You have successfully completed your registeration \n We Welcome you abord \n\n \n \n Thanks and Regards \n Gente & Ciudad";
}
else
{
	echo '<script>alert("Error");</script>';
	echo '<script>location.href="./sign_up.html";</script>';
}



if ($conn->query($sql) === TRUE) {
	echo "Success";
	mail($email,"Regisration Successfull",$msg);
	header('Location:./RegisterSuccess.php?name='.$fname);

} else {
	echo '<script>alert("Account Already Exists");</script>';
	echo '<script>location.href="./sign_up.html";</script>';
    //header('Location:./sign_up.html');

}

$conn->close();
?>