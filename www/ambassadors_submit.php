<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php

require('lib/autoload.php');
$submission = new Ambassadors($_POST["name"], $_POST["email"], intval($_POST["phno"]), $_POST["gender"], $_POST["city"], $_POST["college"], $_POST["why"], $_POST["other"]);
$submission->email();
$submission->store();

?>

</body>
</html>
