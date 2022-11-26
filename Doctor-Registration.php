<?php

$firstname=filter_input(input_post,'firstname');
$lastname=filter_input(input_post,'lastname');
$age=filter_input(input_post,'age');
$nic/passport=filter_input(input_post,'passport');
$specialization=filter_input(input_post,'specialization');
$phone=filter_input(input_post,'phone');
$currentaddress=filter_input(input_post,'currentaddress');
$email=filter_input(input_post,'email');
$password=filter_input(input_post,'password');
$retypepassword=filter_input(input_post,'retypepassword');
if (!empty($email))
{
	if (!empty($password))
	{
		$host="localhost";
		$dbemail="root";
		$dbpassword="";
		$dbname="queenhospital";
		
		$conn=new mysql($host,$dbemail,$dbpassword,$dbname);
		
		if (mysql_connect_error())
		{
			die('Connect Error ('.mysql_connect_errorno().')'.mysql_connect_error());
		}
		else
		{
			$sql="INSERT INTO doctor (firstname,lastname,age,nic/passport,specialization,phone,currentaddress,email,password,retypepassword)
			value('$firstname','$lastname','$age','$nic/passport','specialization','$phone','$currentaddress','$email','$password','$retypepassword')";
			if ($conn->query($sql))
			{
				echo "New record is inserted sucessfully";
			}
			else
			{
				echo "Error:".$sql."<br>.$conn->error;
			}
			$conn->close();
		}
	}
		
		
	}
	else
	{
		echo "email should not be empty";
		die();
	}
}

else 
{
	echo "password should not be empty";
	die();
}
	

?>