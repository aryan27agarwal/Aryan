<?php
$title = 'Campus Ambassadors Submission';
$stylesheets = array('/stylesheets/contact.css');
include('header.php');
?>

<div class="acknowledgement">
Thank you for applying <?php echo $_POST["name"]; ?>!<br>
You'll receive a confirmation at <?php echo $_POST["email"]; ?>.<br><br>
<small><a href="/">&lt;&lt; go home</a></small>
</div>

<?php

require('../vendor/autoload.php');
$submission = new Ambassadors($_POST["name"], $_POST["email"], intval($_POST["phno"]), $_POST["gender"], $_POST["city"], $_POST["college"], $_POST["why"], $_POST["other"]);
$submission->email();
$submission->store();
$submission->notify();


?>

<?php
$scripts = array();
include('footer.php');
?>