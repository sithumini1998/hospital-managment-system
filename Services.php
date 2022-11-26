<?php
if(isset($_POST['display']))
{
$hostname="localhost";
$username="root";
$pw="";
$db="queenhospital";

$con=new mysqli($hostname,$username,$pw,$db);

$query="select*from chanelling";
$result=mysql_query($query);
?>
<html>
<head>
<title>Channeling Details</title>
<head>
<body>
<table align="center" border="1px" style="width:600px;line-height:40px;">
<tr>
<th colspan="12"><h2>Channeling Details</h2></th>
</tr>
<tr>
<th>Patient's Name</th>
<th>Patient's Age</th>
<th>Patient's Gender</th>
<th>Patient's contact.No</th>
<th>Patient's Address</th>
<th>Speciality</th>
<th>Doctor's Name</th>
<th>Appointment Date</th>
<th>Appointment Day</th>
<th>Appointment Time</th>
<th>Appointment Reason</th>
</tr>
<?php
while($rows=mysql_fetch_assoc($result))
{
<tr>
<td><?php echo $rows.['patient_name'];?></td>
<td><?php echo $rows.['patient_age'];?></td>
<td><?php echo $rows.['gender'];?></td>
<td><?php echo $rows.['contact_no'];?></td>
<td><?php echo $rows.['patient_address'];?></td>
<td><?php echo $rows.['speciality'];?></td>
<td><?php echo $rows.['doctors_name'];?></td>
<td><?php echo $rows.['appointment_date'];?></td>
<td><?php echo $rows.['appointment_day'];?></td>
<td><?php echo $rows.['appointment_time'];?></td>
<td><?php echo $rows.['appointment_reason'];?></td>
</tr>
</table>
}
?>
<?php
if(isset($_POST['delete']))
{
$a=$_POST['pn'];

$hostname="localhost";
$username="root";
$pw="";
$db="queenhospital";

$con=new mysqli($hostname,$username,$pw,$db);

$sql="DELETE FROM channelling WHERE patient_name='$a'";
$con->query($sql);
}
?>

<?php
if(isset($_POST['delete']))
{
$a=$_POST['pn'];

$hostname="localhost";
$username="root";
$pw="";
$db="queenhospital";

$con=new mysqli($hostname,$username,$pw,$db);

$sql="UPDATE channeling SET  WHERE patient_name='$a'";
$con->query($sql);
}
?>
</body>
</html>