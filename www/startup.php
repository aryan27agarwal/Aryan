
 <html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
mysqli_query($conn,"INSERT INTO ambassadors VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phno]', '$_POST[gender]', '$_POST[city]', '$_POST[why]', '$_POST[college]', '$_POST[other]')");
 ?>

</body>
</html>
