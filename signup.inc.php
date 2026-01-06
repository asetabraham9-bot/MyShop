<?php

if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $confirmpwd = $_POST["confirmpwd"];


    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        $errors=[];

        if(is_input_Empty ($fullname,$email ,$pwd ,$confirmpwd)){
        $errors["empty_input"]="Fill in all fields, please!";
        }


        if(is_email_Ivalid ($email)){
            $errors["invalid_email"]="Invalid email used!";
        }


        if(is_username_taken ( $pdo, $username)){
            $errors["username_taken"]="Username already taken!";
        }

        if(is_email_registered( $pdo, $email )){
            $errors["email_used"]="Email already registered!";
        }
      require_once 'session.inc.php';


        if($errors){
            $_SESSION["errors_signup"]=$errors;
            header("Location: ../signup.php");
            die();

        }

        create_user( $pdo,  $username, $email , $pwd , $confirmpwd);
        header("Location:../signup.php?singup=success");

        $pdo = null;
        $stmt = null;
        die();
    
       
    } catch  (PDOException $e) {
        die("connection failed: ". $e->getMessage());
    }
} 
else{
    header("Location:../signup.php");
    die();

}