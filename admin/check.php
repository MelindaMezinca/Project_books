<?php 
session_start();
$name=$_POST['name']; 
$pass=$_POST['pass']; 

if($name==("admin") && $pass==("pass"))
{
	$_SESSION['accesAdmin']="true";
	header("location: admin.php");
}else 
{
	$_SESSION['accesAdmin'] ="false";
	echo "sorry something went wrong. Try again.";
}
?>
