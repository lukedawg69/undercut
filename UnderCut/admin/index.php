<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('location:login.php');
}

?>
<?php include("inc/header.php"); ?>

<title>Admin</title>


	<div class="container center-div">
		<div class="heading text-center" id="welcome-text">Welcome
			<?php echo $_SESSION['user'] ?></div>
	</div>
	<div>
		
	</div>
<?php require "inc/footer.php"; ?>