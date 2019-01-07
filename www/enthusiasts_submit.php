<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
include('db.php');
include('lib/updates.php');
mysqli_query($conn,"INSERT INTO enthusiasts VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phno]', '$_POST[city]', '$_POST[why]', '$_POST[college]', '$_POST[other]')");
email_update($_POST["email"],$_POST["name"],'enthusiast');
?>

</body>
</html>
