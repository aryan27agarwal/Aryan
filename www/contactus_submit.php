<?php include('header.php'); ?>
<html>
<body>
Thank you<?php echo $_POST["fname"]; ?><br>
you will be contacted on <?php echo $_POST["email"]; ?>

<?php
include('db.php');
include('lib/updates.php');
mysqli_query($conn,"INSERT INTO contactus VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[query]')");
email_update($_POST["email"],$_POST["name"],'contact_us');
?>

</body>
</html>
<?php
$scripts = array();
include('footer.php');
?>
