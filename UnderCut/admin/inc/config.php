<?php

// $con = mysqli_connect('localhost', 'root' );
// if($con){
// 	// echo "conenction successful";
// }else{
// 	echo "no connection";
// }

/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'undercut';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>