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
	$qual=$_POST['qual'];
	$apply=$_POST['apply'];
	$year=$_POST['year'];

	$sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
	mysqli_query($conn,$sql);
	if(mysqli_query($conn,$sql)){
    header('location:index.php');
  }
  else{
    echo "FAILED to post the job $sql. " . mysqli_error($conn);
  }
}

mysqli_close($conn);

?>
