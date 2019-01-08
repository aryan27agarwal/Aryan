<?php
$title = 'Entrepreneurship Enthusiasts Submission';
$stylesheets = array('/stylesheets/contact.css');
include('header.php');
?>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php

require('./lib/autoload.php');
$submission = new Enthusiasts($_POST["name"], $_POST["email"], intval($_POST["phno"]), $_POST["city"], $_POST["college"], $_POST["why"], $_POST["other"]);
$submission->email();
$submission->store();

?>

<?php
$scripts = array();
include('footer.php');
?>
