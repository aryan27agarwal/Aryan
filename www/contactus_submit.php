<?php include('header.php'); ?>
<html>
<body>
Thank you<?php echo $_POST["fname"]; ?><br>
you will be contacted on <?php echo $_POST["email"]; ?>

<?php

require('./lib/autoload.php');
$submission = new ContactUs($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['query']);
$submission->email();
$submission->store();

?>

</body>
</html>
<?php
$scripts = array();
include('footer.php');
?>
