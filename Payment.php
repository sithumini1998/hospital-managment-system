<?php


$a=$_POST["type"];
$b=$_POST["name"];
$c=$_POST["invoice"];
$d=$_POST["amount"];
$e=$_POST["payer_name"];
$f=$_POST["payer_id"];
$g=$_POST["tele"];
$h=$_POST["mail"];
$i=$_POST["address"];	



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "queenhospital";

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
	$sql="INSERT INTO  payment_portal(Type,Name,Invoice,Amount,Payer_name,Payer_id,Telephone,Email,Address) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
if ($conn->query($sql) === TRUE) {
  echo " successfully";
  
} else
 {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>