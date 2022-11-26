<?php


$a=$_POST["email"];
$b=$_POST["password"];


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
$sql="INSERT INTO  user (Email,Password) VALUES('$a','$b')";
	
if ($conn->query($sql) === TRUE) {
  echo "  Login Successfully";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>