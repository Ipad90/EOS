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
				<form name = "register" method = "post" action = "register.php">

					<input type = "text" name = "username" placeholder = "USERNAME" value = "<?PHP echo $username; ?>"><br>
									
					<input type = "text" name = "email" placeholder = "E - MAIL" value = "<?PHP echo $email; ?>"><br>

					<input type = "password" name = "password_1" placeholder = "PASSWORD"><br>

					<input type = "password" name = "password_2" placeholder = "RE - ENTER PASSWORD"><br>
					
					<input type = "text" name = "first_name" placeholder = "FIRST NAME" value = "<?PHP echo $fname; ?>"><br>
						
					<input type = "text" name = "last_name" placeholder = "LAST NAME" value = "<?PHP echo $lname; ?>"><br>
						
					<input type = "text" name = "address" placeholder = "SHIPPING ADDRESS" value = "<?PHP echo $address; ?>"><br>
					
					<!--
					
					<input type = "text" name = "address" placeholder = "STREET NAME">
					
					<input type = "text" name = "address" placeholder = "POSTAL CODE">
					
					<input type = "text" name = "address" placeholder = "AREA">
					
					<input type = "text" name = "address" placeholder = "STATE">
					
					<input type = "text" name = "address" placeholder = "COUNTRY">
					
					-->
					
					<input type = "submit" name = "reg_user" value = "SIGN UP">
					
					<p>
						Already a member? <a href = "login.php">SIGN IN</a>
					</p>
				</form>
				<?PHP include('error_form.php'); ?>
			</div>
		</div>
	</body>
</html>