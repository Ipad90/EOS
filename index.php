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
				<li class = "w3-mobile active" ><a class = "active" href = "index.php">HOME</a></li>
				<li class = "w3-mobile active" ><a href = "aldo.php">ALDO</a></li>
				<li class = "w3-mobile active" ><a href = "berluti.php">BERLUTI</a></li>
				<li class = "w3-mobile active" ><a href = "pedro.php">PEDRO</a></li>
				<li class = "w3-mobile active" ><a href = "profile.php">PROFILE</a></li>
				<li class = "w3-mobile active" style = "float: right"><?PHP
					if (isset($_SESSION['login'])) {
						echo '<a href = "logout.php">LOG OUT</a>';
					} else {
						echo '<a href = "login.php">LOG IN</a>';
					}
				?></li>
			</ul>
		</header>
				
		<div class = "gap_50_h"></div>
			<table align = "center">
				<tr>
					<th><a href = "aldo.php"><img src = "EOS/Aldo_Logo.jpg"></a></th>
				</tr>
				
				<tr>
					<th><div class = "gap_50_h"></div></th>
				</tr>
				
				<tr>
					<th><a href = "berluti.php"><img src = "EOS/Berluti_Logo.jpg"></a></th>
				</tr>
				
				<tr>
					<th><div class = "gap_50_h"></div></th>
				</tr>
				
				<tr>
					<th><a href = "pedro.php"><img src = "EOS/Pedro_Logo.jpg"></a></th>
				</tr>
			</table>
		<div class = "gap_50_h"></div>
		
		<footer>
			<p>Copyright &copy 2018, Empire of Shoes. All Rights Reserved.</p>
		</footer>
	</body>
</html>