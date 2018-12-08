<?php
include('conn.php');
session_start();
if(!isset($_SESSION['username']))
{
	print '<script type="text/javascript">';
	print 'alert("Please Login");';
	print '</script>';
	header("location: index.php");
}
$c_id = $_SESSION['c_id'];
$i = 1;
?>
<html>
<body>
<h1>COMPANY</h1>
<br>
<table border='1'>
<tr>
<td>Job ID</td>
<td>Job Description</td>
<td>Vacancy</td>
<tr>
<?php
//vacancy table generation
$query = "SELECT j_id,j_descp,vacancy FROM jobs WHERE c_id='$c_id'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result))
{
    echo '<tr>';
		echo '<td>' . $row['j_id'] . '</td>';
		echo '<td>' . $row['j_descp'] . '</td>';
		echo '<td>' . $row['vacancy'] . '</td>';
    echo '</tr>';
}
?>
<table>
</table>
<br>
<form action='' method=post>
Enter job description:<input type='text' name='j_descp'></input>
<br>
Enter vacancy:<input type='number' name='vacancy'></input>
<br>
<input type='submit' name='submit' value='Add'>
<br>
Enter Job ID to remove job:<input type='number' name='delete_j_id'></input>
<input type='submit' name='delete_job' value='Delete'>
<?php
//INSERT query block
if(isset($_POST['submit']))
{
	//print $_POST['j_descp'];
	//print $_POST['vacancy'];
	//print $_SESSION['c_id'];
	$j_descp = $_POST['j_descp'];
	$vacancy = $_POST['vacancy'];
	$sql = "INSERT INTO `jobs`(`j_id` , `c_id` , `j_descp` , `vacancy`) VALUES ( , '$c_id' , '$j_descp' , '$vacancy')";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_affected_rows($conn);
	if($result)
	{
		print '<script type="text/javascript">';
		print 'window.alert("Insert Successfull");';
		print 'window.location.href="companyindex.php";';
		print '</script>';
		
	}
}

//DELETE query block
else if(isset($_POST['delete_job']))
{
	$delete_j_id = $_POST['delete_j_id'];
	
	$sql = "DELETE FROM `jobs` WHERE j_id = '$delete_j_id'";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_affected_rows($conn);
	if($result)
	{
		print '<script type="text/javascript">';
		print 'window.alert("Delete Successfull");';
		print 'window.location.href="companyindex.php";';
		print '</script>';
		
	}
}
?>
</body>
</html>