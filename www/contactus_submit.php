<?php
$title = 'Contact Us Submission';
$stylesheets = array('/stylesheets/contact.css');
include('header.php');
?>

Thank you <?php echo $_POST["fname"]; ?><br>
you will be contacted on <?php echo $_POST["email"]; ?>

<?php

require('./lib/autoload.php');
$submission = new ContactUs($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['query']);
$submission->email();
$submission->store();

?>

<?php
$scripts = array();
include('footer.php');
?>
