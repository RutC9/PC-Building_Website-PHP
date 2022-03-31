<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <?php include 'navigation.php' ?>

    <div id="login-main">
		<h1>LOGIN</h1>
        <?php
        if(isset($_REQUEST['message']))//if message received from login process is eqaul to 1 ,then login failed
        {
            if($_GET['message'] == '1')
            {
                echo '<h1>INVALID CREDENTIALS</h1>';
            }
        }
        ?>
        
		<form method="post" action="login_process.php">
			
            <label for="user_naame">Username</label>
			<input id="text" type="text" name="username"><br><br>
            <label for="user_naame">Password</label>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" name='submit' value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>

        
	</div>

    <?php include 'footer.php' ?>
</body>
</html>