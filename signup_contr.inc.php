<?php

declare(strict_types=1);

function is_input_Empty (string $username,string $email ,string $pwd ,string $confirmpwd){
    if(empty(fullname)|| empty(email)  || empty($pwd)  || empty($confirmpwd)  ){
          return true;
    }
    else{
        return false;
    }
}


function is_email_Ivalid (string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          return true;
    }
    else{
        return false;
    }
}

function is_username_taken (object $pdo, string $username)
{
    if(get_username( $pdo, $username )){
          return true;
    }
    else{
        return false;
    }
}


function is_email_registered (object $pdo, string $email)
{
    if(get_email ( $pdo, $email )){
          return true;
    }
    else{
        return false;
    }
}

function create_user(object $pdo, string $username,string $email ,string $pwd ,string $confirmpwd){
{
   set_user( $pdo,  $username, $email , $pwd , $confirmpwd);
    }
}