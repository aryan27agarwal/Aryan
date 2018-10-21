<?php
$title = 'Home';
$stylesheets = array('/stylesheets/test.css');
include('header.php');
?>

<div class="background full">
    <div class="wrapper full">
        <div class="heading">
            <img class="logo" src="images/finallogo.png">
            <br>
            <h1>Entrepreneurship Cell</h1>
            <h3>GD Goenka Technology Business Incubator</h3>
        </div>
        <div class="boxwrapper">
            <button class="box blue">
                Sign In
            </button>
            <button class="box">
                Know More
            </button>
        </div>
    </div>
</div>

<!-- Quote -->
<div class="quotebg">
    <h1 class="quote">
        "Build your own dreams, or someone else will hire you to build theirs."
    </h1>
    <footer>
        -Farrah Grey
    </footer>
</div>

<!-- Teams -->
<div class="teams">
    <h1 class="head">Teams</h1>
    <div class="imageholder">
        <img src="/svg/pr.svg"><br>
        <p class="label">Public<br>Relations</p>
    </div>
    <div class="imageholder">
        <img src="/svg/marketing.svg"><br>
        <p class="label">Marketing</p>
    </div>
    <div class="imageholder">
        <img src="/svg/webdev.svg"><br>
        <p class="label">Web<br>Development</p>
    </div>
    <div class="imageholder">
        <img src="/svg/media.svg"><br>
        <p class="label">Media</p>
    </div>
    <div class="imageholder">
        <img src="/svg/sponsorship.svg"><br>
        <p class="label">Sponsorship</p>
    </div>
</div>

<div class="social">
    <img src="/images/fb.png" class="social"><img src="/images/tweet.png" class="social"><img src="/images/insta.png" class="social">
</div>

<?php
$scripts = array();
include('footer.php');
?>