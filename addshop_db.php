<?php 
    session_start();
    require("connect.php");
    require("authen.php");

    $errors = array();
    if(isset($_POST['add_shop'])){
        $shopname = mysql_real_escape_string($_POST['addshop_shopname']);
        $shopdetail = mysql_real_escape_string($_POST['addshop_shopdetail']);
        $userid =  $_SESSION['userid'] ;
        if (count($errors)==0){
            $sql = "INSERT INTO `aiqtdealer`.`shop` (`shopid`, `userid`, `shopname`, `shopdetail`) VALUES (NULL, '$userid', '$shopname', '$shopdetail');";
            $query = mysql_query($sql,$conn);
            header("location: addshop_success.php?shopname=$shopname&shopdetail=$shopdetail");
        }
    }
    // echo "test";
    // $sql = "INSERT INTO `aiqtdealer`.`test` (`tid`, `tname`, `tsomething`) VALUES (NULL, '165165', '165');";
    // $result = mysql_query($sql, $db_conn);
?>