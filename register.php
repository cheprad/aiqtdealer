<?php 
require("connect.php");
echo "test";
$sql = "INSERT INTO `aiqtdealer`.`test` (`tid`, `tname`, `tsomething`) VALUES (NULL, '165165', '165');";
$result = mysql_query($sql, $db_conn);
?>