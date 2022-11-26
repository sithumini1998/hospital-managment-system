<?php


$a=$_POST["name"];
$b=$_POST["age"];
$c=$_POST["address"];
$d=$_POST["nic"];
$e=$_POST["group"];
$f=$_POST["mobilenumber"];
$g=$_POST["email"];
$h=$_POST["sequrityquestion"];
$i=$_POST["answer"];
$j=$_POST["password"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "queenhospital";

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

 if(isset($_POST['submit']))
{
	
	$sql="INSERT INTO  patient_registration(Name,Age,Address,NIC,Blood_group,Mobile_number,Email,Security_question,Answer,Password) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
	
	if ($conn->query($sql) === TRUE) {
  echo "Successfullly Registered";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>