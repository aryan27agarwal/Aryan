<?php
$title = 'Home';
$stylesheets = array('/stylesheets/test.css');
include('header.php');
?>
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
<div class="test">
</div>
<?php
$scripts = array();
include('footer.php');
?>