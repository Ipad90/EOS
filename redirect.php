<?PHP 
	require 'server.php';
	session_start();
	
	header ('refresh:2 url =index.php');
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
				<p>Click <a href = "index.php">here</a> if page does not load.</p>
			</div>
		</div>
	</body>
</html>