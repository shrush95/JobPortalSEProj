<?php
include('conn.php');
session_start();
$c_id = $_SESSION['c_id'];
//INSERT query block
	//print $_POST['j_descp'];
	//print $_POST['vacancy'];
	//print $_SESSION['c_id'];
	$j_descp = $_POST['j_descp'];
	$vacancy = $_POST['vacancy'];
	$hsc = $_POST['j_hsc'];
	$be = $_POST['j_be'];
	$sql = "INSERT INTO `jobs`(`j_id`, `c_id`, `j_descp`, `vacancy`, `j_hsc_marks`, `j_be_marks`) VALUES ('' , '$c_id' , '$j_descp' , '$vacancy' , '$hsc' , '$be')";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_affected_rows($conn);
	if($result)
	{
		print '<div class="alert alert-success">
    <a href="company.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>Login Successful!</div>';
	}
?>	

<html>
<head><link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css"></head>
</html>