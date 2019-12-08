<?php
session_start();
require('inc/config.php');
$db = mysqli_select_db($mysqli, 'undercut');

if(isset($_POST['submit'])){
	$username = $_POST['user_name'];
	$password = $_POST['user_pass'];

	$sql = " select * from  login_admin where user_name='$username' and user_pass='$password' ";
	$query = mysqli_query($mysqli,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:index.php');
		}else{
			echo "login failed";
			header('location:login.php');
		}

}


?>

