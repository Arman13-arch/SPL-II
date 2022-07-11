<?php

session_start();
include('database.php');

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/activation.css">
        <title>Account Activation</title>
        <!-- <style>
            h1{
                color:purple;
            }
            .contactForm{
                border:1px solid #7c73f6;
                margin-top: 50px;
                border-radius: 15px;
            }
        </style> -->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10 contactForm">
                    <h1>Account Activation</h1>
                        <?php
                            if(!isset($_GET['email'])||!isset($_GET['key'])){
                                echo '<div class="alert alert-danger">There was an error. Please click on the activation you received by email.</div>';
                                exit;
                            }
                            $email= $_GET['email'];
                            $key=$_GET['key'];
                            $email=mysqli_real_escape_string($link,$email);
                            $key=mysqli_real_escape_string($link,$key);
                            $sql = "UPDATE users SET activation='activated' WHERE (email='$email' AND activation='$key') LIMIT 1;" ;
                            $result = mysqli_query($link,$sql);
                            
                            if(mysqli_affected_rows($link)==1){
                                echo '<div class="alert alert-danger">Your account has been activated.</div>';
                                echo '<a href="login.php" type="button" class="btn-lg btn-dark">Log in</a>';
                            }
                            else{
                                echo '<div class="alert alert-danger">Your account could not be activated. Please try again later.</div>';
                               
                            }
                        ?>
                </div>
            </div>
        </div>
        <script src="https://ajax.goggleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>