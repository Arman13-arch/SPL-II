<?php
session_start();
include("database.php");

global $errors;

$missingEmail = '<p><strong>Please Enter your email address!</strong></p>';
$missingPassword = '<p><strong>Please Enter your password!</strong></p>';

// Checking if email empty or invalid
if(empty($_POST["loginemail"])){
    $errors .= $missingEmail;
}
else{
    $email= filter_var($_POST["loginemail"],FILTER_SANITIZE_EMAIL);
}

// Checking if passsword empty or invalid
if(empty($_POST["loginpassword"])){
    $errors .= $missingPassword;
}
else{
    $password= filter_var($_POST["loginpassword"],FILTER_SANITIZE_STRING);
}

if($errors){
    $resultMessage = '<div class="alert alert-danger">' .$errors.'</div>';
    echo $resultMessage;
}
// Else Start 
else{
    $email = mysqli_real_escape_string($link,$email);
    $password = mysqli_real_escape_string($link,$password);
    $password = hash('sha256',$password);
 

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND activation='activated';";
    $result = mysqli_query($link,$sql);
    if(!$result){
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }

    $count = mysqli_num_rows($result);
    if($count !== 1){
        echo '<div class="alert alert-danger">Wrong username or password</div>';
    }
    else{
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];


        if(empty($_POST['#rememberme'])){
            //echo "empty";
            echo "success";
        }
        else{
        // Remember me  
            $authenticator1= bin2hex(openssl_random_pseudo_bytes(10)); 
            $authenticator2= openssl_random_pseudo_bytes(20); 
            function f1($a,$b){
                $c = $a . "," . bin2hex($b);
                return $c;
            }
            $cookieValue = f1($authenticator1,$authenticator2);
            setcookie("rememberme",$cookieValue,time()+1296000); //15days = 1296000second

            function f2($a){
                $b=hash('sha256',$a);
                return $b;
            }
            $f2authenticator2 = f2($authenticator1);
            $user_id=$_SESSION['user_id'];
            $expiration=date('y-m-d H:i:s',time()+1296000);

            $sql = "INSERT INTO rememberme (authenticator1,f2authenticator2,user_id,expires) VALUES ('$authenticator1','$f2authenticator2','$user_id','$expiration');";
       
            $result = mysqli_query($link,$sql);
            if(!$result){
                echo '<div class="alert alert-danger">There was an error storing data to remember you next time</div>';
            }else{
            
                echo "success"; 
            }
        }
    } 
}// Else End 
?>