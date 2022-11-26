<?php

$patient_name=$_POST['pn'];
$patient_age=$_POST['age'];
$gender=$_POST['gender'];
$patient_teleNo=$_POST['teleno'];
$patient_address=$_POST['address'];
$Speciality=$_POST['speciality'];
$doctor_name=$_POST['dn'];
$appointment_date=$_POST['appdate'];
$appointment_day=$_POST['appday'];
$available_time=$_POST['availablet'];
$appointment_reason=$_POST['reason'];




$server="localhost";
$username="root";
$password="";
$dbname="queenhospital";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
  echo "fail";
 
}
else
{
  echo "";
}

if(isset($_POST['save'])){
$sql="Insert into channeling (Patient_name,Patient_age,Gender,Patient_teleNo,Patient_address,Speciality,Doctor_name,Appointment_date,Appointment_day,Available_time,Appointment_reason) values('$patient_name','$patient_age','$gender','$patient_teleNo','$patient_address','$Speciality','$doctor_name','$appointment_date','$appointment_day','$available_time','$appointment_reason')";

if ($conn->query($sql) === TRUE) {
  echo " successfully";
  
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>