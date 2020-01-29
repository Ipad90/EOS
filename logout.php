<?PHP
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
	<?PHP
		include 'head.php';
	?>
	
	<body>		
		<div class = "w3-display-middle w3-container w3-center">
			<div class = "box">
				<h1>Empire of Shoes</h1>
				<p>Click here to sign in again.</p>
				<a href = "login.php"><button class = "button_1">LOGIN</button></a><br>
				<p>Or click here to view our products without signing in.</p>
				<a href = "login.php"><button class = "button_1">SHOP PAGE</button></a><br>
			</div>
		</div>
		
	</body>
</html>