<?php
	$connection= new mysqli('127.0.0.1','root','','project');
	if(!$connection)
	{
		echo 'Not connected To Server';
	}

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$first_Name =$_POST['FirstName'];
	$last_Name=$_POST['LastName'];
	$age =$_POST['age'];
	$email=$_POST['Email'];
	$password_1 =$_POST['Password1'];
	$password_2 = $_POST['Password2'];
	$last_Name=$_POST['LastName'];
	$gender=$_POST['gender'];
	
	if($password_1===$password_2)
	{
		$sql ="INSERT INTO users Values('$first_Name','$last_Name','$age','$email','$password_1','$gender','0')";
	}
	else
		echo 'Password did not match.';
	if ($connection->query($sql) === TRUE) {
    	header("refresh:0.2; url=../InternalPage.html");
    }
    else {
    echo "Error: " . $sql . "<br>" . $connection->error;
	}

$connection->close();
?>