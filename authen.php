<?php 
    session_start();
    if( !isset($_SESSION['userid'])){
        header('location:login.php');
    }
    function checkAdmin(){
        if($_SESSION['role']!=="admin"){
            header('location:index.php');
        }
    }

?>
