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
$submission = new idea($_POST["name1"], $_POST["name2"], $_POST["name3"],$_POST["email1"], $_POST["email2"], $_POST["email3"], intval($_POST["phno1"]), intval($_POST["phno2"]), intval($_POST["phno3"]), $_POST["name1"], $_POST["college"], $_POST["why"], $_POST["other"]);
$submission->email();
$submission->store();
$submission->notify();


?>

<?php
$scripts = array();
include('footer.php');
?>