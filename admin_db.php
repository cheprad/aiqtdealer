<?php 
	require("connect.php");
	session_start();
	$userid = $_SESSION['userid'];
	$query = "SELECT * FROM aiqtdealer.user WHERE userrole != 'admin'";	
	$result = mysql_query($query,$conn);
	while ($row = mysql_fetch_assoc($result)) { 
		$rows[] = $row; 
	} 
?>