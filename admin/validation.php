<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'s2db');
$username=$_POST['username'];
$password=$_POST['password'];

$s = "SELECT * FROM admin WHERE UserName='$username' && Password:='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num>1){
	header('location:dashboard.php');
}
else{
	header('location:change-password.php');
}
?>