<?php
$title = 'Idea 2019 Submission';
$stylesheets = array('/stylesheets/contact.css');
include('header.php');
?>

<div class="acknowledgement">
Thank you for registering <?php echo $_POST["name1"]; ?>!<br>
You'll receive a confirmation at <?php echo $_POST["email1"]; ?>.<br><br>
<small><a href="/">&lt;&lt; go home</a></small>
</div>

<?php

require_once('../vendor/autoload.php');
$submission = new Enthusiasts($_POST["name"], $_POST["email"], intval($_POST["phno"]), $_POST["city"], $_POST["college"], $_POST["why"], $_POST["other"]);
$submission->email();
$submission->store();
$submission->notify();


?>

<?php
$scripts = array();
include('footer.php');
?>
