<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>
<head>
<body>
	<h2>User Login</h2>
	<form method="POST" action="/my_first_form.php">
    	<p>
        	<label for="username">Username</label>
			<input id="username" name="username" type="text" placeholder="Enter Your Username">
    	</p>
    	<p>
        	<label for="password">Password</label>
        	<input id="password" name="password" type="password" placeholder="Enter Your Password">
   		</p>
    	<p>
        	<button type="submit">Login</button>
    	</p>
	</form>
	<h2>Compose an Email</h2>
	<form method="POST" action="my_first_form.php">
		<p>
			<label for="to">To:</label>
			<input id="to" name="to" type="text" placeholder="Recipient">
		</p>
		<p>
			<label for="from">From:</label>
			<input id="from" name="from" type="text" placeholder="Sender">
		</p>
		<p>
			<label for="subject">Subject:</label>
			<input id="subject" name="subject" type="text" placeholder="Type Your Subject Here">
		</p>
		<p>
			<label for="body">Body:</label>
			<input id="body" name="body" type="text" placeholder="Enter Message Here">
		</p>
		<p>
			Do You Want To Save A Copy to Your Sent Folder?
		</p>
			<label>YES
			<input checked="checked" type="checkbox" id="Yes" value="YES" name="katesarray[]"></label>
	<h2>Multiple Choice Test</h2>
	<label for="movies">Select Your Favorite Movies</label>
		<select id="movies" name="movies[]" multiple>
			<option value="Scarface">Scarface</option>
			<option value="Boondock-Saints">Boondock Saints</option>
			<option value="Pulp-Fiction">Pulp Fiction</option>
			<option value="The-Fifth-Element">The Fifth Element</option>
			<option value="Reservoir-Dogs">Reservoir Dogs</option>
			<option value="Django-Unchained">Django Unchained</option>
			<option value="Kill-Bill">Kill Bill</option>
		</select>
		<br>
		<p>What is the scientist's name on "Back to the Future?</p>
			<label>
				<input type="radio" name="scientist" value="DocYellow">Doc Yellow
			</label>
			<br>
			<label>
				<input type="radio" name="scientist" value="DocBrown">Doc Brown
			</label>
			<br>
			<label>
				<input type="radio" name="scientist" value="DocSkippy">Doc Skippy
			</label>
		</p>
		<p>Where is Rome located?</p>
			<label>
				<input type="radio" name="geo" value="Africa">Africa
			</label>
			<br>
			<label>
				<input type="radio" name="geo" value="Italy">Italy
			</label>
			<br>
			<label>
				<input type="radio" name="geo" value="Spain">Spain
			</label>
		</p>
		<p>What countries have you visited?</p>
			<label>
				<input type="checkbox" id="loc1" value="SouthKorea" name="katesarray[]">South Korea
			</label>
			<br>
			<label>
				<input type="checkbox" id="loc2" value="Germany" name="katesarray[]">Germany
			</label>
			<br>
			<label>
				<input type="checkbox" id="loc3" value="Italy" name="katesarray[]">Italy
			</label>
			<br>
			<label>
				<input type="checkbox" id="loc4" value="Mexico" name="katesarray[]">Mexico
			</label>
			<br>
			<label>
				<input type="checkbox" id="loc5" value="Switzerland" name="katesarray[]">Switzerland
			</label>
		</p>
	<h2>Select Testing</h2>
		<label for="seniorcitizen">Are you a senior citizen?</label>
			<select id="seniorcitizen" name="seniorcitizen">
				<option value="1"> YES</option>
				<option value="0"> NO</option>
			</select>
		<p>
			<button type="send">Send</button>
		</p>
	</form>
</body>
</html>