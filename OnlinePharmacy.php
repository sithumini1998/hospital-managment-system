<?php


$a=$_POST["title"];
$b=$_POST["Name"];
$c=$_POST["age"];
$d=$_POST["gender"];
$e=$_POST["TP"];
$f=$_POST["email"];
$g=$_POST["comment"];


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
	
	$file=$_FILES['image']['name'];
	$sql="INSERT INTO  onlinepharmacy_tb(Title,Name,Age,Gender,Contact_number,Email,Picture,Comment) VALUES('$a','$b','$c','$d','$e','$f','$file','$g')";
if ($conn->query($sql) === TRUE) {
  echo " successfully";
  move_uploaded_file($_FILES['image']['tmp_name'],"$file");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>