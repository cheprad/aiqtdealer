<?php 
		require("connect.php");
		session_start();
		$userid = $_SESSION['userid'];
		$query = "SELECT * FROM aiqtdealer.shop WHERE userid = $userid  ";	
		$result = mysql_query($query,$conn);
		$test = mysql_num_rows($result);
		// echo $test ; 
		// echo "<br>";
		// $fetch_result = mysql_fetch_assoc($result);
		// print_r($fetch_result);
		// echo "<br>";
		// var_dump($fetch_result);
		while ($row = mysql_fetch_assoc($result)) { 
			$rows[] = $row; 
			// print_r($rows);
			// echo "<br>";
	   	} 
		// echo($fetch_result);
		// $data = array();
	?>