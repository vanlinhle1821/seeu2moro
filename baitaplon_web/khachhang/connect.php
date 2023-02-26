<?php
$host="localhost";
$user_name="root";
$pass="";
$db_name="congtybaove";
$conn= new mysqli($host,$user_name,$pass,$db_name);

if($conn -> connect_error){
	echo "kết nối không thành công";
	$conn->close();
	exit();
} 
?>