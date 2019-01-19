<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign in with freecoder</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="https://freecoder.in/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="https://freecoder.in/login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://freecoder.in/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://freecoder.in/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="https://freecoder.in/login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="https://freecoder.in/login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="https://freecoder.in/login/vendor/animsition/css/animsition.min.css">\
    <link rel="stylesheet" type="text/css" href="https://freecoder.in/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://freecoder.in/login/css/main.css">
</head>

<body style="display: none;">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" id="data" method="post"><span class="login100-form-title p-b-6" style="color:grey">Sign in</span>
                    <div class="container-login100-form-btn p-b-20"><span class="txt1" style="font-size: 16px;">with you freecoder account</span></div>
                    <div id="success" style="font-size: 15px;display: none;">
                        <div class="container-login100-form-btn p-b-20"><span class="alert alert-success">Login successfull redirecting...</span></div>
                    </div>
                    <div id="faild" style="font-size: 13px;display: none;">
                        <div class="container-login100-form-btn p-b-20"><span class="alert alert-danger">Sorry! invalid credentials. Try again</span></div>
                    </div>
                    <div style="font-size: 13px;display: none;" id="error">
                        <div class="container-login100-form-btn p-b-20"><span class="alert alert-danger">Something wenr wrong! Server Issue.</span></div>
                    </div>
                    <div style="font-size: 13px;display: none;" id="un-varified">
                        <div class="container-login100-form-btn p-b-20"><span class="alert alert-danger">Your account is not varified. Check your mail.</span></div>
                    </div>
                    <div style="font-size: 13px;display: none;" id="un-active">
                        <div class="container-login100-form-btn p-b-20"><span class="alert alert-danger">Your account is desabled by Admin.</span></div>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="text" name="email" id="email" required="required"><span class="focus-input100" data-placeholder="Email"></span></div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password"><span class="btn-show-pass"><i class="zmdi zmdi-eye"></i></span>
                        <input class="input100" type="password" name="pass" required="required"><span class="focus-input100" data-placeholder="Password"></span></div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" id="submit" style="text-transform: capitalize;">Login</button>
                        </div>
                    </div>
                    <div class="container-login100-form-btn"><span class="txt1"><a class="txt2" href="forgot.html">Forgot Password?</a></span> &nbsp; <span>|</span>&nbsp;<a class="txt2" href="signup.html">Sign Up?</a></div>
                    <hr>
                    <div style="text-align: center;"> <span>Powered By <a href="https://freecoder.in/">freecoder.in</a></span></div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://freecoder.in/login/vendor/jquery/jquery-3.2.1.min.js" type="976b4401d31ea974d7510ba4-text/javascript"></script>
    <script src="https://freecoder.in/login/vendor/animsition/js/animsition.min.js" type="976b4401d31ea974d7510ba4-text/javascript"></script>
    <script src="https://freecoder.in/login/js/main.js"></script>
    <script src="https://freecoder.in/login/vendor/bootstrap/js/popper.js" type="976b4401d31ea974d7510ba4-text/javascript"></script>
    <script src="https://freecoder.in/login/vendor/bootstrap/js/bootstrap.min.js" type="976b4401d31ea974d7510ba4-text/javascript"></script>
</body>

</html>