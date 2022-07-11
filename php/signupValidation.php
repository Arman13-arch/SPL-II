<?php

session_start();
include_once("database.php");

$missingUserName = '<p><strong>Please enter a username</strong></p>';
$missingEmail = '<p><strong>Please enter your email address</strong></p>';
$invalidEmail = '<p><strong>Please enter a valid email address</strong></p>';
$missingPassword = '<p><strong>Please enter a password</strong></p>';
$InvalidPassword = '<p><strong>your password should be at least 6 characters long and include one capital letter and one number!</strong></p>';
$differentPassword = '<p><strong>Password don\'t match!</strong></p>';
$missingPassword2 = '<p>Please confirm your password</p>';

global $errors;
global $email;
global $password;
global $username;

// Checking if username empty 
if(empty($_POST["username"])){
    $errors .= $missingUserName;
}
else {
    $username= filter_var($_POST["username"],FILTER_SANITIZE_STRING);
}
// Checking if email empty or invalid
if(empty($_POST["email"])){
    $errors .= $missingEmail;
}
else{
    $email= filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors.=$invalidEmail;
    }
}
// Checking if password empty or invalid
if(empty($_POST["password"])){
    $errors.=$missingPassword;
}
elseif(!(strlen($_POST["password"])>6 and preg_match('/[A-Z]/',$_POST["password"]) and preg_match('/[0-9]/',$_POST["password"]))){
    $errors .= $InvalidPassword;
}
// Checking if Confirm password empty or invalid
if(empty($_POST["confirm_password"])){
    $errors .= $missingPassword2;
}
else{
    $password  = filter_var($_POST["password"],FILTER_SANITIZE_STRING);
    $password2 = filter_var($_POST["confirm_password"],FILTER_SANITIZE_STRING);
    if($password !== $password2){
    $errors.=$differentPassword;
    }
}
// else{
//     $password= filter_var($_POST["password"],FILTER_SANITIZE_STRING);
//     if(empty($_POST["password2"])){
//         $errors .= $missingPassword2;
//     }else{
//         $password2=filter_var($_POST["password2"],FILTER_SANITIZE_STRING);
//         if($password2 !== $password2){
//             $errors.=$differentPassword;
//         }
//     }
// }
if($errors){
    $resultMessage='<div class="alert alert-danger">'. $errors .'</div>';
    echo $resultMessage;
}

$username = mysqli_real_escape_string($link,$username);
$email = mysqli_real_escape_string($link,$email);
$password = mysqli_real_escape_string($link,$password);
// $password = md5($password);
$password = hash('sha256',$password);

// Checking if username already registered 
$sql = "SELECT * FROM users WHERE username='$username';";
$result = mysqli_query($link,$sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>';
    exit;
}
$results = mysqli_num_rows($result);
if($results){
   echo '<div class="alert alert-danger">That user name is already registered</div>';
   exit;
}

// Checking if email already registered 
$sql = "SELECT * FROM users WHERE email='$email';";
$result = mysqli_query($link,$sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>';
    exit;
}
$results = mysqli_num_rows($result);
if($results){
   echo '<div class="alert alert-danger">That email name is already registered</div>';
   exit;
}
 

// Create Activation Key 
$activationkey = bin2hex(openssl_random_pseudo_bytes(16));

$sql = "INSERT INTO users (username,email, password,activation) VALUES('$username','$email','$password','$activationkey');";
$result = mysqli_query($link,$sql);
if(!$result){
    echo '<div class="alert alert-danger">There was an error inserting the users details in the database</div>';
    exit;
}

$message = "Please click on this link to activate your account:\n\n";
$message .= "http://localhost:3000/php/activateAccount.php?email=".urlencode($email)."&key=$activationkey";


if(mail($email,'Confirm your registration',$message,'From: armanurrashid105086@gmail.com')){
    echo "<div class='alert alert-success'>Thanks for registration. A confirmation email has been sent to $email. Please click on the activation link to activate your account</div>";
}

?>