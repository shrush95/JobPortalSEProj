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
$e_id = $_SESSION['e_id'];
$i = 1;
?>
<html>
<body>
<h1>EMPLOYEE</h1>
<table border=2>
<tr>
<td>Job Id</td>
<td>Company Id</td>
<td>Company Name</td>
<td>Job Description</td>
<td>Vacancy</td>
<tr>
<?php
$query = "SELECT j.j_id,c.c_id,c.c_name,j.j_descp,j.vacancy FROM employee as e,jobs as j,company as c WHERE e.e_hsc_marks > j.j_hsc_marks AND e.e_be_marks >= j.j_be_marks AND vacancy > 0 ";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result))
{
    echo '<tr>';
		echo '<td>' . $row['j_id'] . '</td>';
		echo '<td>' . $row['c_id'] . '</td>';
		echo '<td>' . $row['c_name'] . '</td>';
		echo '<td>' . $row['j_descp'] . '</td>';
		echo '<td>' . $row['vacancy'] . '</td>';
		$i++;
    echo '</tr>';
}
?>
</table>
<br>
<form action='' method=post>
Enter Job ID to apply for job:<input type='number' name='apply_j_id'><br>
Enter Company ID to apply for job:<input type='number' name='apply_c_id'><br>
<input type='submit' name='apply' value='Apply'>
</form>

</body>
</html>