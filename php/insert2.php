<?php
	$connection= new mysqli('127.0.0.1','root','','project');
	if(!$connection)
	{
		echo 'Not connected To Server';
	}

if ($connection->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	} 
	$email_1=$_POST['email'];
	$password_1 =$_POST['Password'];
	$sql = "SELECT Email,password FROM users";
	$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
	{
		if($row["Email"]===$email_1 && $row["password"]===$password_1)
		{	//Succfully Login.
			    	header("refresh:0.2; url=../InternalPage.html");
		}
		else if($row["Email"]===$email_1 && $row["password"]!=$password_1)
		{
					header("refreash:0.2; url=../Login.html");	
		}
	}
}
$connection->close();
?>