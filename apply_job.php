<?php
include('conn.php');
session_start();

$e_id = $_SESSION['e_id']; 
$j_id = $_POST['j_id'];

$company_id_query = "SELECT c_id FROM jobs WHERE j_id='$j_id'";
$company_id_result = mysqli_query($conn,$company_id_query);
$company_id_row = mysqli_fetch_array($company_id_result);
$c_id = $company_id_row['c_id'];

/* 
	Status Symbol list:
	0 Rejected
	1 Accepted 
	2 Pending
*/

$insert_query = "INSERT INTO `job_apply_status`(`a_id`, `j_id`, `e_id`, `c_id`, `status`) VALUES ('','$j_id','$e_id','$c_id','pending')";
$insert_result = mysqli_query($conn,$insert_query);
if ($insert_result)
{
	print '<div class="alert alert-success"><a href="employee.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>Applied Successfully!</div>';
}
?>

<html>
<head><link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css"></head>
</html>