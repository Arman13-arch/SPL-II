<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/signIn.css">
        <title>Sign In Page</title>
    </head>
    <body>
        <form  method="POST" id="loginForm">
            <div class="row no-gutters">
                <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
                    <div class="card card0 border-0">
                        <div class="row ">
                            <div class="col-lg-5 text-center">
                                <img src="/images/signIn.png" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div class="card2 card border-0 px-4 py-5">
                                    <div class="row mb-4 px-3">
                                        <h3 class="mb-0 mr-4 mt-2 text-center">Login</h3>
                                    </div>
                                    <div class="row px-3 mb-4">
                                        <div class="line"></div>
                                        <small class="or text-center">***</small>
                                        <div class="line"></div>
                                    </div>
                                    <div id="loginmessage"></div>
                                    <div class="row px-3 form-group">
                                        <label for="loginemail" class="mb-1"><h6 class="mb-0 text-sm">Email Address</h6></label>
                                        <input class="form-control mb-4" type="text" name="loginemail" placeholder="Enter your edu email address">
                                    </div>
                                    <div class="row px-3 form-group">
                                        <label for="loginpassword" class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                                        <input class="form-control mb-1.5"type="password" name="loginpassword" placeholder="Enter password">
                                    </div>
                                    <div class="text-end mb-3 text-sm ">
                                    <a href="#" class="text-decoration-none" style="color:blue ;">Forgot Password? </a> 
                                    </div>
                                    <div class="row mb-2 px-3">
                                    <button type="submit" class="btn1">Login</button> 
                                    </div>

                                    <!-- <div class="row px-2 d-flex mb-3 align-items-center ">
                                        <div class="col-8 contact100-form-checkbox ">
                                         <input class="input-checkbox100 align-middle" type="checkbox" value="" id="ckb1" name="remember-me">Remember Me
                                         <label for="ckb1" class="label-checkbox100"> </label>
                                    </div>
                                     <div class="col-4"> 
                                         <span class="col-9 ml-auto text-sm"><a href="#" class="forgot-pass">Forgot Password?</a></span>
                                     </div>
                                     </div> -->
                                

                                        <!-- <div class="d-flex mb-5 align-items-center">
                                            <label class="control control--checkbox mb-0">
                                                <span class="caption">Remember Me</span>
                                                <input type="checkbox">
                                                <div class="control__indicator"></div>
                                            </label>
                                            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password?</a></span>
                                        </div> -->
                                    
                                    
                                    <!-- <div class="flex-sb-m w-full p-b-30">
                                        
                                        <div class="contact100-form-checkbox">
                                        <input class="input-checkbox100 align-middle" type="checkbox" value="" id="ckb1" name="remember-me">
                                        <label for="ckb1" class="label-checkbox100"> Remember Me</label>
                                        </div>

                                        <div>
                                            <a href="#" class="txt1">Forgot Password?</a>
                                        </div>
                                    </div> -->
                                    <div class="row mb-2 text-sm">
                                         <label class="form-check-label" for="rememberme" >  
                                        <input class="form-check-input align-middle" type="checkbox" value="" id="rememberme" name="rememberme"> Remember Me 
                                        </label>
                                    </div> 

                                    <div class="row px-1 ">
                                        <small class="font-weight-bold">Don't have an account? <a href="/php/signup.php" class="text-danger text-decoration-none">Register Now</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="/js/login.js"></script>
    </body>
</html>