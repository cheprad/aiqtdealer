<?php 
session_start();
require("connect.php");
$sql = "DELETE FROM shop WHERE shopid=4;";
$query = mysql_query($sql,$conn);

?>