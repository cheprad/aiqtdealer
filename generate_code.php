<?php 
    require("connect.php");
    $shopnickname = "BAB";
    
    function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    $code = $shopnickname.generateRandomString(3);

    echo $code .'<br>';
    $codedate = date("Y-m-d");
    echo $codedate ;
   
    $sql = "INSERT INTO `aiqtdealer`.`gencode` (`codeid`, `codedate`, `codegen`, `shopid`) VALUES (NULL, ' $codedate', '$code', '5');";
    $query = mysql_query($sql,$conn);
?>    

<!-- เช็ค codedate ใน db ถ้าซ้ำ ไม่ต้อง gencode ออกมาแล้ว <<< ทำให้กดปุ่มไม่ได้แต่แรกเลยก็ได้ -->