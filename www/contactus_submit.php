<?php
$title = 'Contact Us Submission';
$stylesheets = array('/stylesheets/contact.css');
include('header.php');
?>

<div class="acknowledgement">
Thank you <?php echo $_POST["fname"]; ?>!<br>
You will be contacted at <?php echo $_POST["email"]; ?>.<br><br>
<small><a href="/">&lt;&lt; go home</a></small>
</div>

<?php

require('../vendor/autoload.php');
$submission = new ContactUs($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['query']);
$submission->email();
$submission->store();
$submission->notify();

?>

<?php
$scripts = array();
include('footer.php');
?>
