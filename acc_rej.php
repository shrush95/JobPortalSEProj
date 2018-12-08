<?php
include('conn.php');
session_start();

$a_id = $_POST['a_id'];
$query = "SELECT j_id FROM job_apply_status WHERE a_id='$a_id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$j_id = $row['j_id'];
if (isset($_POST['accept']))
{
	$update_query = "UPDATE `job_apply_status` SET `status`='accepted' WHERE a_id='$a_id'";
	$update_result = mysqli_query($conn,$update_query);
	if($update_result)
	{
		$vacancy_query = "SELECT vacancy FROM jobs WHERE j_id = '$j_id'";
		$vacancy_result = mysqli_query($conn,$vacancy_query);
		$vacancy_row = mysqli_fetch_array($vacancy_result);
		$vacancy = $vacancy_row['vacancy'];
		$vacancy = $vacancy - 1;
		$update_vacancy_query = "UPDATE `jobs` SET `vacancy`='$vacancy' WHERE j_id='$j_id'";
		$update_vacancy_result = mysqli_query($conn,$update_vacancy_query);
		if($update_vacancy_result)
		{
			print '<div class="alert alert-success">
			<a href="company.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>Accepted!</div>';
		}
	}
}
else
if (isset($_POST['reject']))
{
	$update_query = "UPDATE `job_apply_status` SET `status`='rejected' WHERE a_id='$a_id'";
	$update_result = mysqli_query($conn,$update_query);
	if($update_result)
		print '<div class="alert alert-danger">
    <a href="company.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>Rejected!</div>';
}
?>

<html>
<head><link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css"></head>
</html>