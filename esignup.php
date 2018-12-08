<?php

include("conn.php");
session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$hsc = $_POST['hsc'];
$be = $_POST['be'];

//print $username;
//print $email;

//check for existing email
$check_email_query = "SELECT e_emailid FROM employee WHERE e_emailid = '$email'";
$result = mysqli_query($conn,$check_email_query);
$count = mysqli_num_rows($result);
if ($count == 1)
{
	print '<div class="alert alert-danger">
    <a href="employeesignup.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>' . $email . ' already is registered!</div>';	
}

//check for existing username
else if(mysqli_num_rows(mysqli_query($conn,"SELECT e_username FROM employee WHERE e_username = '$username'")))
	{
		print '<div class="alert alert-danger">
    <a href="employeesignup.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>' . $username . ' already is already taken. Please choose something different!</div>';	
	}
	
//insert statement
else
{
	$insert_query = "INSERT INTO `employee`(`e_username`, `e_password`, `e_emailid`, `e_fname`, `e_lname`, `e_hsc_marks`, `e_be_marks`) VALUES ('$username','$password','$email','$fname','$lname','$hsc','$be')";
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