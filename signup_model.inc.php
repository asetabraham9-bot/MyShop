<?php

declare(strict_type=1);

function get_username(object $pdo, string $username )
{
   $query="SELECT username FROM users WHERE username = :username";
   $stmt = $pod->prepare(query);
   $stmt->bindparam(":username",$username);
   $stmt->is_execute();

   $result= $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;
} 


function get_email(object $pdo, string $email )
{
   $query="SELECT username FROM users WHERE email = :email";
   $stmt = $pod->prepare(query);
   $stmt->bindparam(":email",$email);
   $stmt->is_execute();

   $result= $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;
} 

function set_user(object $pdo, string $username,string $email ,string $pwd ,string $confirmpwd){
    $query="INSERT INTO users (username,email,pwd,confirmpwd) VALUES (:username, :email, :pwd, :confirmpwd);";
   $stmt = $pod->prepare(query);

   $options = [
        'cost'=> 12
   ];
   $hashedpwd= password_hash($pwd , PASSWORD_BCRYPT, $options);
   $stmt->bindparam(":username",$username);
   $stmt->bindparam(":email",$email);
   $stmt->bindparam(":pwd",$pwd);
   $stmt->bindparam(":confirmpwd",$confirmpwd);
   $stmt->is_execute();

}