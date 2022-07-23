<?php 
    require("connect.php");
    // $shopnickname = "BAB";
    function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    isset($_GET['sid'])? $sid = $_GET['sid'] : $sid = '';
    // $sid = 8;
    $code = $shopnickname.generateRandomString(6);
    $codedate = date("Y-m-d");
    // $shopid = 6;

    $query = "SELECT * FROM aiqtdealer.gencode WHERE codedate = '$codedate' AND shopid = '$sid' ";
    $result = mysql_query($query,$conn);
    
    print_r($result.'<br>');
    print_r(mysql_num_rows($result).'<br>');
    if (mysql_num_rows($result)==0){ 
        $sql = "INSERT INTO `aiqtdealer`.`gencode` (`codeid`, `codedate`, `codegen`, `shopid`) VALUES (NULL, ' $codedate', '$code', '$sid');";
        $query = mysql_query($sql,$conn);
        echo "add date </br>";
    }

    echo $code .'<br>';
    echo $codedate ;
    header("location:shop_detail.php?sid=$sid");
?>
<!-- เช็ค codedate ใน db ถ้าซ้ำ ไม่ต้อง gencode ออกมาแล้ว <<< ทำให้กดปุ่มไม่ได้แต่แรกเลยก็ได้ -->