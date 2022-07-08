<?php 
    session_start();
    include("connect.php");

    $errors = array();
    // echo "dick";
    

    if (isset($_POST['login_user'])){
        // echo "dick";
        $username = mysql_real_escape_string($_POST['login_email']);
        $password = mysql_real_escape_string($_POST['login_password']);
        
        if (empty($username)) {
            array_push($errors ,"Email is required");
            // echo "username ok ";
        }

        if (empty($password)) {
            array_push($errors, "Password is required") ; 
            // echo "password ok ";
        }
    
        if(count($errors) == 0 ) {
            // echo $password;
            $password = md5($password);
            // echo $password ;
            $query = "SELECT * FROM aiqtdealer.user WHERE email = '$username' AND password = '$password' ";
            $result = mysql_query($query,$conn);
            // print_r($_SESSION);
            if (mysql_num_rows($result)==1){
                $_SESSION['username'] = $username ;
                $_SESSION['success'] = "Your are now logged in";
                // echo "login";
                // header("location: index.php");
            }else {
                array_push($errors,"Wrong username/password combination");
                $_SESSION['error'] = "Wrong username or password try again!";
                // echo "error";
                // header("location: index.php");
            }
        }
    }
?>