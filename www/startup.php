
 <html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
include('db.php');
mysqli_query($conn,"INSERT INTO ambassadors VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phno]', '$_POST[gender]', '$_POST[city]', '$_POST[why]', '$_POST[college]', '$_POST[other]')");

$to      = $_POST['email'];
$subject = 'Thanks for registering with us!';
$message = "Hello,\n\nThank you $_POST[name] registering with Entrepreneurship Cell, GD Goenka University. We have successfully received your Campus Ambassador application. You would hear back from us post review of the application. The current status of your application is: SUBMITTED.\n\nThanks,\nE Cell, GD Goenka University.";
$headers = 'From: E-Cell, GD Goenka University<email@ecellgdgu.org>' . "\r\n" .
    'Reply-To: email@ecellgdgu.org';

mail($to, $subject, $message, $headers);
 ?>

</body>
</html>
