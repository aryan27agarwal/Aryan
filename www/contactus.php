<?php
$title = 'Contact';
$stylesheets = array('/stylesheets/contact.css');
include('header.php');
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class='background contact'>
<div class="container trans">
  <div style="text-align:center;color:white">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <div id="map">
        <iframe src="https://www.google.com/maps/embed/v1/place?q=GD%20Goenka%20University%2C%20IN&amp;zoom=17%20&amp;key=AIzaSyB7FJv2cFSEAWP_wT0UD2R1x4oxJCNX60o" allowfullscreen="true" width="100%" height="500px" frameborder="0"></iframe>
      </div>
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname"></label>
        <input type="text" id="fname" name="firstname" placeholder="First Name">
        <label for="lname"></label>
        <input type="text" id="lname" name="lastname" placeholder="Last Name">
        <label for="mail"></label>
        <input type="text" id="mail" name="mail" placeholder="Email Address">
        <textarea id="subject" name="subject" placeholder="Query" style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
</div>

</body>
</html>
<?php
$scripts = array();
include('footer.php');
?>
