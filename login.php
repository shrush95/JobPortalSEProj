<?php
include("conn.php");
session_start();
// Taking values from form

$username = $_POST["username"];
$password = $_POST["password"];
//echo $user;
//echo $pass;

//Checking in DB
$login_query = "SELECT * FROM login_info where username='$username' AND password='$password'";
$result_query = mysqli_query($conn,$login_query);
$count = mysqli_num_rows($result_query);
$row=mysqli_fetch_array($result_query);
if ($count == 1)
{
//Employee check
$e_id_query = "select e_id from employee where e_username='$username' and e_password='$password'";
$result_e_id_query = mysqli_query($conn,$e_id_query);
$count_e_id = mysqli_num_rows($result_e_id_query);
$row_e_id = mysqli_fetch_array($result_e_id_query);

//Company check
$c_id_query = "select c_id from company where c_username='$username' and c_password='$password'";
$result_c_id_query = mysqli_query($conn,$c_id_query);
$count_c_id = mysqli_num_rows($result_c_id_query);
$row_c_id = mysqli_fetch_array($result_c_id_query);
}
//Check conditions
if ($count == 0)
	{
		//print '<script type="text/javascript">';
		print '<div class="alert alert-danger">
    <a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>Invalid Username and Password!</div>';
		//print 'history.back();';
		//print '</script>';
		//echo "Invalid Username or Password";
	}
else if ($count == 1 && $count_e_id == 1)
	{
		$_SESSION['username'] = $username;
		$_SESSION['e_id'] = $row_e_id['e_id'];
		//print '<script type="text/javascript">';
		//print 'alert("Login Successful");';
		print '<div class="alert alert-success">
    <a href="employeeinfo.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>Login Successful!</div>';
		//print '</script>';
		//header("location: employeeindex.php");
	}
else if ($count == 1 && $count_c_id == 1)
	{
		$_SESSION['username'] = $username;
		$_SESSION['c_id'] = $row_c_id['c_id'];
		//print '<script type="text/javascript">';
		//print 'alert("Login Successful");';
		print '<div class="alert alert-success">
    <a href="companyinfo.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>Login Successful!</div>';
		//print '</script>';
		//header("location: companyindex.php");
	}	
?> 
<html>
<head><link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css"></head>
</html> 