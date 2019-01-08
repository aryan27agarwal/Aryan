<?php
$title = 'Entrepreneurship Enthusiasts';
$stylesheets = array('/stylesheets/enthusiasts.css');
include('header.php');
?>
<div class="background fm">
<div class="form">
 <form method="post" action="enthusiasts_submit.php"  autocomplete="on">

<h1>Are you a startup enthusiast? </h1>
<h2 > Register with us </h2>
<br>
<input type="text" placeholder="Name" name="name"><br><br>
<input type="email" placeholder="Email Address" name="email"><br><br>
<input type="tel" placeholder="Phone Number" name="phno"><br><br>
<input type="text"  name="city" placeholder="City"> <br><br>
<input type="text" placeholder="Tell us why would you like to enroll?" name="why"><br><br>
<input type="text" name="college"  placeholder="University"><br><br>
<input type="text" placeholder="Anything else you would like us to know?" name="other" ><br><br>

<b >  We will keep you posted with further updates and may invite you for our meetups on your provided contact details.
<br><br>
<input id="opt-in" onclick="inchanged()" type="radio" name="opt" value="opt-in">Opt-in<br>
<input id="opt-out " checked type="radio" onclick="outchanged()" name="opt" value="opt-out">Opt-out<br>
</b><br>
<input id="Submit" disabled="disabled" type="submit" value="Submit">
<br>
</form>
<script>
function outchanged() {
document.getElementById("Submit").disabled=true;
}
function inchanged(){
document.getElementById("Submit").disabled=false;
}
</script>
</div>
</div>
<?php
$scripts = array();
include('footer.php');
?>
