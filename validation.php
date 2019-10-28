<?php

session_start();


$con = mysqli_connect('localhost','root');

if($con){
	
	echo"<h1>connection successful<h1>"."<br>";
	
}else
{
	
	echo" no connection";
	
}

mysqli_select_db($con,"sessionims");

$name= $_POST['user'];
$pass= $_POST['password'];

$q = "select * from signin where name='$name' && password= '$pass' ";
 
$result= mysqli_query($con,$q);

$num= mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['username'] = $name;
	
	header('location:dashboard.php');
	
	
}
else{
	
	header('location:login.php');
}

?>