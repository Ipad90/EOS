<?PHP
	require 'server.php';
	
	session_start();
?>

<!DOCTYPE html>
<html>
	<?PHP
		include 'head.php';
	?>
	
	<body>
		<header>
			<ul class = "a">
				<li><a href = "index.php"><img src = "EOS/logo.png"></a></li>
			</ul>
			
			<ul class = "b">
				<li class = "w3-mobile active"><a href = "index.php">HOME</a></li>
				<li class = "w3-mobile active"><a href = "aldo.php">ALDO</a></li>
				<li class = "w3-mobile active"><a href = "berluti.php">BERLUTI</a></li>
				<li class = "w3-mobile active"><a href = "pedro.php">PEDRO</a></li>
				<li class = "w3-mobile active"><a class = "active" href = "profile.php">PROFILE</a></li>
				<li class = "w3-mobile active" style = "float: right"><?PHP				
					if (isset($_SESSION['login'])) {
						echo '<a href = "logout.php">LOG OUT</a>';
					} else {
						echo '<a href = "login.php">LOG IN</a>';
					}
				?></li>
			</ul>
		</header>

		<div class = "w3-display-middle">
			<div class = "box">
			<?PHP					
				if (isset($_SESSION['login'])) {
					echo '<a href = "cart.php"><button class = "button_1">CART</button></a><br>';
					echo '<a href = "shopping_history.php"><button class = "button_1">PURCHASE HISTORY</button></a><br>';
					echo '<a href = "wishlist.php"><button class = "button_1">WISHLIST</button></a><br>'; 
				} else {
					echo '<p>View your profile by <br> logging in or creating an account</p>';
					echo '<a href = "login.php"><button class = "button_1">LOG IN</button></a><br>';
					echo '<a href = "register.php"><button class = "button_1">SIGN UP</button></a>';
				}	
			?>
			</div>
		</div>
		<?PHP
			include 'footer.php';
		?>
	</body>
</html>