<!DOCTYPE html>
<html>
<head>
<link href="//link the icons here">
<link href="//link the css here">
<title>Sign Up</title>
</head>
<body>
	<div class="container" id="signup" style="display:none">
		<h1 class="for-title">Register</h1>
		<form method="POST" action="register.php">
			<div class="input-group">
				<i class="//for the font awesome icon">
				<input type="text" name="fName" id="fname" placeholder="First Name" required>
				<label for="fname">First Name</label>
			</div>	
			<div class="input-group">
				<i class="//for the font awesome icon">
				<input type="text" name="lName" id="lname" placeholder="Last Name" required>
				<label for="lname">Last Name</label>
			</div>
			<div class="input-group">
				<i class="//for the font awesome icon">
				<input type="email" name="email" id="email" placeholder="Email" required>
				<label for="email">Email</label>
			</div>
			<div class="input-group">
				<i class="//for the font awesome icon">
				<input type="password" id="password" placeholder="assword" required>
				<label for="password">Password</label>
			</div>			
			<input type="submit" class="btn" value="Sign Up" name="signUp">
		</form>
		<p class="or">------------or------------</p>
		<div class="links">
			<p>Already Have an Account?</p>
			<button id="signInButton">Sign In</button>
		</div>
	</div>
	<div class="container" id="signin">
		<h1 class="for-title">Register</h1>
		<form method="POST" action="register.php">
			<div class="input-group">
				<i class="//for the font awesome icon">
				<input type="email" name="email" id="email" placeholder="Email" required>
				<label for="email">Email</label>
			</div>
			<div class="input-group">
				<i class="//for the font awesome icon">
				<input type="password" id="password" placeholder="password" required>
				<label for="password">Password</label>
			</div>
			<p class="recover">
				<a href="#">Recover Password</a>
			</p>			
			<input type="submit" class="btn" value="Sign In" name="signIn">
		</form>
		<p class="or">------------or------------</p>
		<div class="links">
			<p>Don't Have an Account?</p>
			<button id="signUp">Sign Up</button>
		</div>
	</div>
	<script src="//script"></script>
</body>
</html>