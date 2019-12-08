<?php
session_start();
require('inc/config.php');
require 'inc/links.php';
?>

<style>
body{
	background-color: darkgray;
}
div.container{
	margin-top: 10%;
	margin-bottom:20%; 
	padding-bottom: 10;
	background-color: lightgray;
}
</style>
<body>

<header>
	<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-Black"> <b> ADMIN LOGIN PAGE</b> </div>
		<div class="container row d-flex flex-row justify-content-center mb-5">
			<div class="admin-form shadow p-2 ">
					<form action="check_login.php" method="POST">
						<div class="form-group">
							<label>Email ID</label>
							<input type="text" name="user_name" value="" class="form-control" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="user_pass" value="" class="form-control" autocomplete="off" required>
						</div>
						<input type="submit" class="btn btn-success" name="submit" >
				</form>
			</div>
		</div>
	</div>
</header>
