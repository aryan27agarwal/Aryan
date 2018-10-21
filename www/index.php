<?php
$title = 'Home';
$stylesheets = array('/stylesheets/test.css');
include('header.php');
?>

<div class="background full">
    <div class="wrapper full">

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
    𝐟 | ţ | 𝑖
</div>

<?php
$scripts = array();
include('footer.php');
?>