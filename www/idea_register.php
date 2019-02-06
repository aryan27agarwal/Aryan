<?php
$title = 'Idea2019';
$stylesheets = array('/stylesheets/idea.css');
include('header.php');
?>
<div class="background fm">
<div class="form">
 <form method="post" action="idea_submit.php"  autocomplete="on">

<h2>Get your team registered for</h2><h1 >Idea 2019</h1>
<br>
<h3>Team leader</h3>
<input type="text" placeholder="Name" name="name1" required>
<input type="email" placeholder="Email Address" name="email1" required>
<input type="tel" placeholder="Phone Number" name="phone1" required>
<br><br>
<h3>Team Member 1 (optional)</h3>
<input type="text" placeholder="Name" name="name2">
<input type="email" placeholder="Email Address" name="email2">
<input type="tel" placeholder="Phone Number" name="phone2">
<br><br>
<h3>Team Member 2 (optional)</h3>
<input type="text" placeholder="Name" name="name3">
<input type="email" placeholder="Email Address" name="email3">
<input type="tel" placeholder="Phone Number" name="phone3">
<br><br>
<h3>Additional Information</h3>
<input type="text" name="university"  placeholder="University">
<select name="state">
<option value="">Select State</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select>
<input type="text"  name="pincode" placeholder="Pincode">
<input type="text"  name="city" placeholder="City">
<br><br>
<h3>Idea</h3>
<input type="text" placeholder="Title / Project Name (15words)" name="title" maxlength="15" required>
<textarea id="subject" name="idea_desc" placeholder="Idea Description (maximum 100)" style="height:120px" maxlength="100" required></textarea>
<br>
<h3>Stage of Idea</h3>
<input type="radio" name="stage" value="idea">  Idea
<input type="radio" name="stage" value="blueprint"> Blueprint
<input type="radio" name="stage" value="prototype"> Prototype
<input type="radio" name="stage" value="launch">  Launch
<br><br> For payment throung PayTm <a href="https://goo.gl/UrVR4S " target="_blank">click here</a>.<br>
<br>In the Institution Area select Idea 2019.<br>
The Payment Should be made in the name of Team Leader only.</h2>
<br><br>
<input type="text" placeholder="Enter your PayTm OrderID/ TransactionID" name="paytm" required>
<input class="final" type="submit" value="Submit">
<br>
</form>

</div>
</div>
<?php
$scripts = array();
include('footer.php');
?>
