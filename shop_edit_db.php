<?php 
    session_start();
    require("connect.php");


    $errors = array();
    if(isset($_POST['edit_shop'])){
        $shopname = mysql_real_escape_string($_POST['shopname']);
        $shopid = mysql_real_escape_string($_POST['shopid']);
        $shopdetail = mysql_real_escape_string($_POST['shopdetail']);
       

        $sql = "UPDATE `aiqtdealer`.`shop` SET `shopname` = '$shopname', `shopdetail` = '$shopdetail' WHERE `shop`.`shopid` = $shopid;";
        $query = mysql_query($sql,$conn);

        header("location: main.php");
    }

   
?>


