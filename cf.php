<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css"/> 
		<script src="scripts.js"></script>
	</head>

	
	<body>
		<h1>Contact Form</h1>
		<div class="container">
			<form action="fp.php" method="post">
				<label for="fname">First Name</label>
				<span id="fname_text" class="error">Required!</span>
				<input onblur="checkEmpty('fname');" type="text" id="fname" name="firstname" placeholder="Your name..">

				<label for="lname">Last Name</label>
				<span id="lname_text" class="error">Required!</span>
				<input onblur="checkEmpty('lname');" type="text" id="lname" name="lastname" placeholder="Your last name..">

				<label for="country">Country</label>
				<select id="country" name="country">
					<option value="canada">Canada</option>
					<option value="usa">USA</option>
				</select>

				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>
