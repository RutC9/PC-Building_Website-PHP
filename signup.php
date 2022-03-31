<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
	<link rel="stylesheet" href="./styles/signup.css">
</head>
<body>
    <?php include 'navigation.php' ?>
    <div id="signup-main">
		<h1>SIGNUP</h1>
		<?php
			if(isset($_SESSION['error_message']))
			{
				echo("Error description: " .$_SESSION['error_message'] );	
			}
			if(!empty($_SESSION['email_error']))
			{
				echo $_SESSION['email_error'];
			}
				
			if(!empty($_SESSION['password_error']))
			{
				echo "<br>".$_SESSION['password_error'];
			}		
			if(!empty($_SESSION['pass_length_error']))
			{
				echo "<br>".$_SESSION['pass_length_error'];
			}		
           
		?>
		<form method="post" action='signup_process.php'>
			

			<label for="user_name">Username</label>
			<input id="text" type="text" name="user_name"><br><br>
			<label for="password">Password</label>
			<input id="text" type="password" name="password"><br><br>

			<label for="confirm-password">Confirm Password</label>
			<input id="text" type="password" name="confirm-password"><br><br>

			<input id="button" type="submit" name='submit' value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
    <?php include 'footer.php' ?>
</body>
</html>

