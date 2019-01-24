<?php
$title = 'Idea2019';
$stylesheets = array('/stylesheets/idea.css');
include('header.php');
?>
<div class="background fm">
<div class="form">
 <form method="post" action="enthusiasts_submit.php"  autocomplete="on">

<h2>Get your team registered for</h2><h1 >Idea 2019</h1>
<br>
<h3>Team Member Names</h3>
<input type="text" placeholder="Name" name="name" required>
<input type="text" placeholder="Name" name="name">
<input type="text" placeholder="Name" name="name">
<br><br>
<h3>Email Address</h3>
<input type="email" placeholder="Email Address" name="email" required>
<input type="email" placeholder="Email Address" name="email">
<input type="email" placeholder="Email Address" name="email">
<br><br>
<h3>Phone Number</h3>
<input type="tel" placeholder="Phone Number" name="phno" required>
<input type="tel" placeholder="Phone Number" name="phno">
<input type="tel" placeholder="Phone Number" name="phno">
<br><br>
<h3>Additional Information</h3>
<input type="text" name="college"  placeholder="University">
<select name=slist>
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
<input type="text" placeholder="Title / Project Name (15words)" name="title" maxlength="15">
<textarea id="subject" name="query" placeholder="Idea Description (maximum 100)" style="height:120px" maxlength="100"></textarea>
<br>
<h3>Stage of Idea</h3>
<input type="radio" name="stage" value="idea">Idea
<input type="radio" name="stage" value="blueprint"> Blueprint
<input type="radio" name="stage" value="prototype"> Prototype
<input type="radio" name="stage" value="launch"> Launch
<br><br> For payment throung PayTm <a href="https://goo.gl/UrVR4S">click here</a>.</h2>
<br><br>
Upload the screenshot of your PayTm payment:
   <input type="file" name="fileToUpload" id="fileToUpload">
   <input type="submit" value="Upload Image" name="submit">
<input id="opt-in" onclick="inchanged()" type="radio" name="opt" value="opt-in">Accept our Terms and Condition<br>
</b><br>
<input class="final" id="Submit" disabled="disabled" type="submit" value="Submit">
<br>
</form>
<script>
function outchanged() {
document.getElementById("Submit").disabled=true;
}
function inchanged(){
document.getElementById("Submit").disabled=false;
}
</script>
</div>
</div>
<?php
$scripts = array();
include('footer.php');
?>
