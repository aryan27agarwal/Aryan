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
        <a>
          <span class="glyphicon glyphicon-menu-down"></span>
        </a>
    </div>
</div>

<!--mission-->
<div class="mission">
  <h1 class="text-center dream">Your dream begins here.</h1><br>
 <div class="row">
  <div class="col-sm-6">
      <p class="text-center">
        <p class="p1">Mission</p><br>
                <img src="images/mission.png"><br><br>
        <p class="p2">Nurture entrepreneurship among students through educational programmes, knowledge generation
      and mentoring, Build capacity of institution through training and research, Make entrepreneurially-driven initiatives by students self sustaining</p>
  </div>
  <div class="col-sm-6">
        <p class="text-center">
         <p class="p1">Vision</p><br>
          <img class="" src="images/vision.png"><br><br>
          <p class="p2">To be pre-eminent in fostering entrepreneurship driven initiatives, education and research directed
     towards the development of economies and societies</p>
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
