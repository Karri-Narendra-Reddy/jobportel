<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
	die("Connection failed:". myysqli_connect_error());
}

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['phone_no'];
	$password=$_POST['password'];

	$sql_query = "INSERT INTO users(`Name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";

	if(mysqli_query($conn,$sql_query))
	{
		header("Location:login.php");

	}
	else
	{
		echo "Error: Could not able to execute $sql. " . mysqli_error($conn);
	}
}


if(isset($_POST['Login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result=mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	if (mysqli_num_rows($result)==1) {
		header("location:dashboard.php");
	}
	else
	{
		$error = "Incorrect email or password.";
	}
}

mysqli_close($conn);

?>
