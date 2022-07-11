<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="/css/signIn.css">
    <title>Registration Page</title>
</head>
<body>

    <div class="row no-gutters">

        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-3 mx-auto">
            <form action="#" method="post" id="signupForm">
                <div class="card card0 border-0">
                    <div class="row d-flex ">
                        <div class="col-lg-5 text-center ">
                            <img src="/images/signIn.png" class="img-fluid">  
                        </div>
                        <div class="col-lg-6">
                            <div class="card2 card border-0 px-4 py-6">
                                <div class="row mb-4 px-3">
                                    <h3 class="mb-0 mr-4 mt-4 text-center">Registration Now</h3>
                                </div>
                                <div class="row px-3 mb-4">
                                    <div class="line"></div>
                                    <small class="or text-center">***</small>
                                    <div class="line"></div>
                                </div>
                                <div id="signupmessage"></div>
                                <div class="row px-3 form-group">
                                    <label class="mb-1" for="username"><h6 class="mb-0 text-sm">Username</h6></label>
                                    <input class="form-control mb-4" type="text" name="username" placeholder="Enter username">
                                </div>
                                <div class="row px-3 form-group">
                                    <label class="mb-1" for="email"><h6 class="mb-0 text-sm">Email Address</h6></label>
                                    <input class="form-control mb-4" type="text" name="email" placeholder="Enter your edu email address">
                                </div>
                                <div class="row px-3 form-group" >
                                    <label class="mb-1" for="password"><h6 class="mb-0 text-sm">Password</h6></label>
                                    <input class="form-control mb-4" type="password" name="password" placeholder="Enter Password">
                                </div>
                                <div class="row px-3 form-group">
                                    <label class="mb-1" for="confirm_password"><h6 class="mb-0 text-sm">Confirm Password</h6></label>
                                    <input class="form-control mb-4" type="password" name="confirm_password" placeholder="Confirm Password ">
                                </div>
                                <div class="row mb-3 px-3">
                                <input class="btn btn-dark" name="signup" type="submit" value="Sign Up"></input>
                                    <!-- <button type="submit" class="btn1">Sign Up</button> -->
                                </div>   
                                <div class="row px-3 ">
                                    <small class="font-weight-bold text-center mb-4">Already a member? <a href="/php/login.php" class="text-danger text-decoration-none">Sign in</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/signup.js"></script>
</body>
</html>