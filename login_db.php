<?php 
    session_start();
    require("connect.php");
    $errors = array();
    
    if (isset($_POST['login_user'])){
        $username = mysql_real_escape_string($_POST['login_email']);
        $password = mysql_real_escape_string($_POST['login_password']);
        
        if (empty($username)) {
            array_push($errors ,"Email is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }
    
        if(count($errors) == 0 ) {
            $password = md5($password);
            $query = "SELECT * FROM aiqtdealer.user WHERE email = '$username' AND password = '$password' ";
            $result = mysql_query($query,$conn);

            if (mysql_num_rows($result)==1){
                $_SESSION['success'] = "Your are now logged in";
                $fetch_result = mysql_fetch_assoc($result);
                $_SESSION['role'] = $fetch_result["userrole"];
                if ($_SESSION['role']=="applicant"){
                    array_push($errors,"บัญชีของท่านกำลังรอการยืนยันจาก admin");
                    $_SESSION['errors'] = $errors;
                    header("location: login.php");
                } else {
                    $_SESSION['userid'] = $fetch_result["userid"];
                    $_SESSION['firstname'] = $fetch_result["firstname"];
                    $_SESSION['lastname'] = $fetch_result["lastname"];
                    $_SESSION['email'] = $fetch_result["email"];
                    $_SESSION['telnum'] = $fetch_result["telnum"];
                    header("location: index.php");
                }


            }else {
                array_push($errors,"Wrong username/password combination");
                $_SESSION['errors'] = $errors;
                header("location: login.php");
            }
        }
    }
?>