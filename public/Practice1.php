<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Warpspeed Form</title>
	<meta charset="utf-8">
</head>
<body>
	<h4>Basic Info</h4>
	<form method="POST" action="Practice1.php" id="form">
		<label for="name">Name</label>
		<input id="name" name="name" type="text" placeholder="Enter Your Name">
		<br>	
		<label for="password">Password</label>
		<input id="password" name="password" type="password" placeholder="Enter Your Name">
		<br>
		<br>
		<textarea id="review" name="review" rows="5" cols="40" placeholder="Enter Text Here"></textarea>
		<br>
		<input type="checkbox" id="mailing_list" value="yes">
		<label for="mailing_list">Send Me Spam</label>

		<p>What operating system do you use?</p>
			<label>Windows 10
				<input type="checkbox" id="os1" value="windows10" name="katesarray[]">
			</label>
			<br>
			<label>Linux
				<input type="checkbox" id="os2" value="linux" name="katesarray[]">
			</label>
			<br>
			<label>OSX
				<input checked="checked" type="checkbox" id="os3" value="osx" name="katesarray[]">
			</label>
			<p>What is Dylans's Favorite Band?</p>
				<label>
					<input type="radio" name="band" value="Nickelback">Nickelback
				</label>
				<br>
				 <label>
					<input type="radio" name="band" value="SpiceGirls">Spice Girls
				</label>
				<br>
				<label>
					<input type="radio" name="band" value="Metallica">Metallica
				</label>
		<br>
		<br>
		<label>
				<input type="checkbox" id="checkbox-tennis"  value="tennis" name="hobbies[]">Tennis
		</label>
		<br>
		<label>
				<input type="checkbox" id="checkbox-netflix"  value="netlix" name="hobbies[]">Netflix
		</label>
		<br>
		<label>
				<input type="checkbox" id="checkbox-philately"  value="philately" name="hobbies[]">Stamp Collecting
		</label>
		<br>
		<label>
				<input type="checkbox" id="checkbox-hiking"  value="hiking" name="hobbies[]">Hiking
		</label>
		<br>
		<br>
		<label for="snacks">Select Your Favorite Snacks</label>
		<select id="snacks" name="snacks[]" multiple>
			<option value="cheetos">Cheetos</option>
			<option value="ice-cream">Ice Cream</option>
			<option value="pbj">Peanut Butter &amp; Jelly</option>
			<option value="orange">Orange</option>
			<option value="almonds">Almonds</option>
			<option value="jerky">Jerky</option>
			<option value="yogurt">Yogurt</option>
		</select>

		<br>
		<br>
			<label for="transmission">Transmission</label>
			<select id="transmission" name="transmission">
				<option>Automatic</option>
				<option selected>Manual</option>
				<option>CVT</option>
			</select>
			<br>
			<br>
			<button type="submit">Submit</button>
	</form>
</body>
</html>
