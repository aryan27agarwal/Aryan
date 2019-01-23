<?php
session_start();
require_once('../vendor/autoload.php');
$i=0;
if(isset($_SESSION['username'])) 
{
    echo'<script>window.location.href="welcome.php";</script>';
}
else
{
    if(isset($_POST['username'])){
        $username=$_POST['username'];
        $db = new Database;
        $sql = "SELECT * FROM recruits WHERE username = :username";
        $data = array('username' => $username);
        $stmt = $db->query($sql, $data);
        var_dump($stmt->fetch());
        if($rows>0)
        {
            $_SESSION['username']=$username;
            echo'<script>window.location.href="welcome.php";</script>';
        }
    }
?>
<html>

<head>
    <title>Candidate Login - ecellgdgu.org</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">.card .button-container button:before,.container.active .card.alt .toggle:before{content:''}#codepen,#portfolio,.card .footer,.card.alt .toggle,.pen-title,.rerun{text-align:center}.card.alt .toggle:before,body{-moz-osx-font-smoothing:grayscale}body{background:#e9e9e9;color:#666;font-family:RobotoDraft,Roboto,sans-serif;font-size:14px;-webkit-font-smoothing:antialiased}.pen-title{padding:20px 0;letter-spacing:2px}.pen-title h1{margin:0 0 20px;font-size:40px;font-weight:300}.pen-title span{font-size:12px}.pen-title span .fa{color:#ed2553}.pen-title span a{color:#ed2553;font-weight:600;text-decoration:none}.rerun{margin:0 0 30px}.rerun a{cursor:pointer;display:inline-block;background:#ed2553;border-radius:3px;box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);padding:10px 20px;color:#fff;text-decoration:none;-webkit-transition:.3s ease;transition:.3s ease}.rerun a:hover{box-shadow:0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23)}#codepen,#portfolio{position:fixed;bottom:30px;right:30px;background:#ec2652;width:56px;height:56px;border-radius:100%;box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-webkit-transition:.3s ease;transition:.3s ease;color:#fff}.card,.container.active .card.alt{border-radius:5px;padding:60px 0 40px}#codepen i,#portfolio i{line-height:56px}#codepen:hover,#portfolio:hover{box-shadow:0 10px 20px rgba(0,0,0,.19),0 6px 6px rgba(0,0,0,.23)}#portfolio{bottom:96px;right:36px;background:#ec2652;width:44px;height:44px;-webkit-animation:buttonFadeInUp 1s ease;animation:buttonFadeInUp 1s ease}#portfolio i{line-height:44px}.container{position:relative;max-width:460px;width:100%;margin:0 auto 100px}.container.active .card:first-child{background:#f2f2f2;margin:0 15px}.container.active .card:nth-child(2){background:#fafafa;margin:0 10px}.container.active .card.alt{top:20px;right:0;width:100%;min-width:100%;height:auto;overflow:hidden}.container.active .card.alt .toggle{position:absolute;top:40px;right:-70px;box-shadow:none;-webkit-transform:scale(14);transform:scale(15);-webkit-transition:-webkit-transform .5s ease;transition:-webkit-transform .5s ease;transition:transform .5s ease;transition:transform .5s ease,-webkit-transform .5s ease}.container.active .card.alt .button-container,.container.active .card.alt .input-container,.container.active .card.alt .title{left:0;opacity:1;visibility:visible;-webkit-transition:.3s ease;transition:.3s ease}.container.active .card.alt .title{-webkit-transition-delay:.3s;transition-delay:.3s}.container.active .card.alt .input-container{-webkit-transition-delay:.4s;transition-delay:.4s}.container.active .card.alt .input-container:nth-child(2){-webkit-transition-delay:.5s;transition-delay:.5s}.container.active .card.alt .input-container:nth-child(3){-webkit-transition-delay:.6s;transition-delay:.6s}.container.active .card.alt .button-container{-webkit-transition-delay:.7s;transition-delay:.7s}.card{position:relative;background:#fff;box-sizing:border-box;box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-webkit-transition:.3s ease;transition:.3s ease}.card:first-child{background:#fafafa;height:10px;border-radius:5px 5px 0 0;margin:0 10px;padding:0}.card .title{position:relative;z-index:1;border-left:5px solid #ec2652;margin:0 0 35px;padding:10px 0 10px 50px;color:#ec2652;font-size:32px;font-weight:600;text-transform:uppercase}.card .input-container{position:relative;margin:0 60px 50px}.card .input-container input{outline:0;z-index:1;position:relative;background:0 0;width:100%;height:54px;border:0;color:#212121;font-size:20px;font-weight:400}.card .input-container input:focus~label{color:#9d9d9d;-webkit-transform:translate(-12%,-50%) scale(.75);transform:translate(-12%,-50%) scale(.75)}.card .input-container input:focus~.bar:after,.card .input-container input:focus~.bar:before{width:50%}.card .input-container input:valid~label{color:#9d9d9d;-webkit-transform:translate(-12%,-50%) scale(.75);transform:translate(-12%,-50%) scale(.75)}.card .input-container label{position:absolute;top:0;left:0;color:#757575;font-size:24px;font-weight:300;line-height:60px;-webkit-transition:.2s ease;transition:.2s ease}.card .input-container .bar{position:absolute;left:0;bottom:0;background:#757575;width:100%;height:1px}.card .input-container .bar:after,.card .input-container .bar:before{content:'';position:absolute;background:#ec2652;width:0;height:2px;-webkit-transition:.2s ease;transition:.2s ease}.card .input-container .bar:before{left:50%}.card .input-container .bar:after{right:50%}.card .button-container{margin:0 60px;text-align:center}.card .button-container button{outline:0;cursor:pointer;position:relative;display:inline-block;background:0;width:240px;border:2px solid #e3e3e3;padding:20px 0;font-size:24px;font-weight:600;line-height:1;text-transform:uppercase;overflow:hidden;-webkit-transition:.3s ease;transition:.3s ease}.card .button-container button span{position:relative;z-index:1;color:#ddd;-webkit-transition:.3s ease;transition:.3s ease}.card .button-container button:before{position:absolute;top:50%;left:50%;display:block;background:#ec2652;width:30px;height:30px;border-radius:100%;margin:-15px 0 0 -15px;opacity:0;-webkit-transition:.3s ease;transition:.3s ease}.card.alt,.card.alt .toggle{width:100px;height:100px;border-radius:100%}.card .button-container button:active,.card .button-container button:focus,.card .button-container button:hover{border-color:#ec2652}.card .button-container button:active span,.card .button-container button:focus span,.card .button-container button:hover span{color:#ec2652}.card .button-container button:active span,.card .button-container button:focus span{color:#fff}.card .button-container button:active:before,.card .button-container button:focus:before{opacity:1;-webkit-transform:scale(10);transform:scale(10)}.card .footer{margin:40px 0 0;color:#d3d3d3;font-size:24px;font-weight:300}.card .footer a{color:inherit;text-decoration:none;-webkit-transition:.3s ease;transition:.3s ease}.card .footer a:hover{color:#bababa}.card.alt{position:absolute;top:40px;right:-70px;z-index:10;background:0 0;box-shadow:none;padding:0;-webkit-transition:.3s ease;transition:.3s ease}.card.alt .toggle{position:relative;background:#ec2652;box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);color:#fff;font-size:42px;line-height:100px;cursor:pointer}.card.alt .toggle:before{content:'\f067';display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-webkit-transform:translate(0,0);transform:translate(0,0)}.card.alt .button-container,.card.alt .input-container,.card.alt .title{left:100px;opacity:0;visibility:hidden}.card.alt .title{position:relative;border-color:#fff;color:#fff}.card.alt .title .close{cursor:pointer;position:absolute;top:0;right:60px;display:inline;color:#fff;font-size:58px;font-weight:400}.card.alt .title .close:before{content:'\00d7'}.card.alt .input-container input,.card.alt .input-container input:focus~label{color:#fff}.card.alt .input-container input:focus~.bar:after,.card.alt .input-container input:focus~.bar:before{background:#fff}.card.alt .input-container input:valid~label{color:#fff}.card.alt .input-container label{color:rgba(255,255,255,.8)}.card.alt .input-container .bar{background:rgba(255,255,255,.8)}.card.alt .button-container button{width:100%;background:#fff;border-color:#fff}.card.alt .button-container button span{color:#ec2652}.card.alt .button-container button:hover{background:rgba(255,255,255,.9)}.card.alt .button-container button:active:before,.card.alt .button-container button:focus:before{display:none}@-webkit-keyframes buttonFadeInUp{0%{bottom:30px;opacity:0}}@keyframes buttonFadeInUp{0%{bottom:30px;opacity:0}}
    </style>
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="container">
                <div class="card"></div>
                <div class="card">
                    <h3 class="title">Ecell GDGU <br>Login</h3>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="input-container">
                            <input type="text" name="username" id="Username" required="required" />
                            <label for="Username">User ID</label>
                            <div class="bar"></div>
                        </div>
                        <div class="button-container">
                            <button type="submit"><span>Login</span></button>
                        </div>
                        <!-- <div class="footer"><a href="#">Forgot your password?</a></div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
}
?>
