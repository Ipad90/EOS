<?PHP 
	require 'server.php';
?>

<!DOCTYPE html>
<html>
	<?PHP
		include 'head.php';
	?>
	
	<body>		
		<div class = "w3-display-middle">
			<div class = "box">
				<h1>Empire of Shoes</h1>
				<form name = "log_in" method = "post" action = "login.php">
				
					<input type = "text" name = "username" placeholder = "USERNAME"><br>

					<input type = "password" name = "password" placeholder = "PASSWORD"><br>

					<input type = "submit" name = "login_user" value = "LOG IN">

					<p>
						Not a member? <a href = "register.php">SIGN UP</a><br>
						Want to view our products without signing in?<br><a href = "index.php">CLICK HERE</a>
					</p>
				</form>
				<?PHP include('error_form.php'); ?>
			</div>	
		</div>		
	</body>
</html>