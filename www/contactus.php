<?php
$title = 'Contact';
$stylesheets = array('/stylesheets/contact.css');
include('header.php');
?>
<div class='background contact'>
<div class="container trans">
  <div style="text-align:center;color:white">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <div id="map">
        <iframe src="https://www.google.com/maps/embed/v1/place?q=GD%20Goenka%20University%2C%20IN&amp;zoom=17%20&amp;key=AIzaSyCMUIu_CYQvx-dKp-XjusGAZI3Nv5VLHfM" allowfullscreen="true" width="100%" height="500px" frameborder="0"></iframe>
      </div>
    </div>
    <div class="column">
      <form method="post" action="contactus_submit.php"  autocomplete="on">
        <label for="fname"></label>
        <input type="text" id="fname" name="fname" placeholder="First Name" required>
        <label for="lname"></label>
        <input type="text" id="lname" name="lname" placeholder="Last Name">
        <label for="mail"></label>
        <input type="text" id="mail" name="email" placeholder="Email Address" required>
        <textarea id="subject" name="query" placeholder="Query" style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
</div>
<?php
$scripts = array();
include('footer.php');
?>
