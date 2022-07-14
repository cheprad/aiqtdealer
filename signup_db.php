<?php 
    session_start();
    require("connect.php");
    $errors = array();
    
    if(isset($_POST['reg_user'])){
        $firstname = mysql_real_escape_string($_POST['signup_firstname']);
        $lastname = mysql_real_escape_string($_POST['signup_lastname']);
        $email = mysql_real_escape_string($_POST['signup_email']);
        $telnum = mysql_real_escape_string($_POST['signup_telnum']);
        $password1 = mysql_real_escape_string($_POST['signup_password']);
        $password2 = mysql_real_escape_string($_POST['signup_check_password']);
        
        if(empty( $firstname)){
            array_push($errors,"firstname is required");
            $_SESSION['error'] = "firstname is required";
        }
        if(empty( $lastname)){
            array_push($errors,"lastname is required");
            $_SESSION['error'] = "lastname is required";
        }
        if(empty( $email)){
            array_push($errors,"email is required");
            $_SESSION['error'] = "email is required";
        }
        if(empty( $telnum)){
            array_push($errors,"telephone number is required");
            $_SESSION['error'] = "telephone number is required";
        }
        if(!is_numeric($telnum)){
            array_push($errors,"กรุณากรอกเฉพาะตัวเลขในช่องเบอร์โทรศัพท์");
            $_SESSION['error'] = "กรุณากรอกเฉพาะตัวเลขในช่องเบอร์โทรศัพท์";
        }
        if(empty( $password1)){
            array_push($errors,"password is required");
            $_SESSION['error'] = "password number is required";
        }
        if(empty( $password1)){
            array_push($errors,"check password is required");
            $_SESSION['error'] = "check password number is required";
        }
        if($password1!==$password2){
            array_push($errors,"Two Password do not match");
            $_SESSION['error'] = "Two Password do not match";
        }

        $user_check_query = "SELECT * FROM aiqtdealer.user WHERE (firstname = '$firstname' AND lastname ='$lastname') OR email = '$email'";
        $query = mysql_query($user_check_query,$conn);
        $result = mysql_fetch_assoc($query);

        if($result) {
            if(($result['firstname'] === $firstname)and($result['lastname']=== $lastname)){
                array_push($errors,"Name already exists");
            }
            if($result['email'] === $email) {
                array_push($errors,'Email already exists');
            }
        }


        if (count($errors)==0){
            $password = md5($password1);
            echo $password;
            $sql = "INSERT INTO `aiqtdealer`.`user` (`userid`, `firstname`, `lastname`, `email`, `telnum`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', '$telnum', '$password');";
            


            mysql_query($sql,$conn);
            
            // $_SESSION['success'] = "You are now logged in";
            // echo var_dump($errors);
            header('location: signup_success.php');

        } else {
            $_SESSION['errors'] = $errors;
            // print_r($_SESSION['errors']);

            header('location: signup.php');

        }

        
    }
    // echo "test";
    // $sql = "INSERT INTO `aiqtdealer`.`test` (`tid`, `tname`, `tsomething`) VALUES (NULL, '165165', '165');";
    // $result = mysql_query($sql, $db_conn);
?>