
<?php
$dbhost='localhost';
	$username='root';
	$password='';
	$db='tpo';

	$conn=new mysqli("$dbhost","$username","$password","$db");
	if($conn)
	{
		echo"";
	}
	else
	{
		die("connection failed because ".mysqli_connect_error());
	}
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO login_detail(email,password) 
VALUES('$email','$password')";
$data=mysqli_query($conn,$query);
if($data)
{

	header('location:index.html');
}
else{
	echo"ljhkgjhdfhj";
}
?>
