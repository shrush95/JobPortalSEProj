<?php

include("conn.php");
session_start();

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
//print $username;
//print $email;

//check for existing email
$check_email_query = "SELECT c_emailid FROM company WHERE c_emailid = '$email'";
$result = mysqli_query($conn,$check_email_query);
$count = mysqli_num_rows($result);
if ($count == 1)
{
	print '<div class="alert alert-danger">
    <a href="companysignup.html" class="close" data-dismiss="alert" aria-label="close">&times;</a>' . $email . ' already is registered!</div>';	
}

//check for existing username
else if(mysqli_num_rows(mysqli_query($conn,"SELECT c_username FROM company WHERE c_username = '$username'")))
	{
		print '<div class="alert alert-danger">
    <a href="companysignup.html" class="close" data-dismiss="alert" aria-label="close">&times;</a>' . $username . ' already exists.Please choose something different.</div>';	
	}
	
//insert statement
else
{
	$insert_query = "INSERT INTO `company`(`c_username`, `c_password`, `c_name`, `c_emailid`) VALUES ('$username','$password','$name','$email')";
	$result = mysqli_query($conn,$insert_query);
	if ($result)
	{
		$result = mysqli_query($conn,"INSERT INTO `login_info`(`username`, `password`)VALUES ('$username','$password')");
		if ($result)
			print '<div class="alert alert-success">
			<a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>Registration Successful. Please login on the next screen.</div>';	
	}
}
?>

<html>
<head><link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css"></head>
</html>