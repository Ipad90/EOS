<?PHP 
	require 'server.php';
	
	session_start();
		
	if (isset($_SESSION['login'])) {
		$username = $_SESSION['login'];
		$SQL = "SELECT User_ID FROM users WHERE User_Username = '$username'";
		$result = mysqli_query($db_found, $SQL);
			
		while ($row = mysqli_fetch_array($result)) {
			$current_user = $row['User_ID'];
		}
		
		$SQL = "SELECT u.User_ID, Date_Added, c.Shoe_ID, Shoe_Name, Shoe_Brand, Shoe_Price, Shoe_Size
				FROM users u, shopping_cart c, shoes s
				WHERE u.User_ID = c.User_ID AND u.User_ID = '$current_user' AND c.Shoe_ID = s.Shoe_ID";
		$records = mysqli_query($db_found, $SQL);
		
		if (isset($_POST['pay'])) {
			$LQS = "SELECT Shoe_ID FROM shopping_cart WHERE User_ID = '$current_user'";
			$finding = mysqli_query($db_found, $LQS);
			
			while ($locating = mysqli_fetch_array($finding)) {
				$status = 'Order Received';
				$all_shoes = $locating['Shoe_ID'];
				$QLS = "INSERT INTO shopping_history (Date_Updated, User_ID, Shoe_ID, Delivery_Status)
				VALUES (now(), '$current_user', '$all_shoes', '$status')";
			
				mysqli_query($db_found, $QLS);
			}
		}
		
		if (isset($_POST['delete'])) {
			$QLS = "DELETE FROM shopping_cart WHERE User_ID = '$current_user'";
			mysqli_query($db_found, $QLS);
			header ('location: cart.php');
		}
	} else {
		header('location: profile.php');
	}
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
				<li class = "w3-mobile active" style = "float: right"><a href = "logout.php">LOG OUT</a></li>
			</ul>
		</header>
		
		<div class = "gap_50_h"></div>
		
		<table align = "center">
			<tr>
				<th class = "r_100"><h5>Date Added</h5></th>
				<th class = "r_100"><h5>Shoe Brand</h5></th>
				<th class = "r_400"><h5>Shoe Name</h5></th>
				<th class = "r_100"><h5>Shoe Price</h5></th>
				<th class = "r_100"><h5>Shoe Size</h5></th>
			</tr>
		<?PHP
			if (isset($_SESSION['login'])) {
				while ($result = mysqli_fetch_assoc($records)) {
					echo '<tr>';
					echo '<th><p>' . $result['Date_Added'] . '</p></th>';
					echo '<th><p>' . $result['Shoe_Brand'] . '</p></th>';					
					echo '<th><p>' . $result['Shoe_Name'] . '</p></th>';
					echo '<th><p>' . 'RM ' . $result['Shoe_Price'] . '</p></th>';
					echo '<th><p>' . $result['Shoe_Size'] . '</p></th>';
					echo '</tr>';
				}
				
				$SLQ = "SELECT SUM(Shoe_Price) AS Grand_Total
						FROM users u, shopping_cart c, shoes s
						WHERE u.User_ID = c.User_ID AND u.User_ID = '$current_user' AND c.Shoe_ID = s.Shoe_ID";
				$grand = mysqli_query($db_found, $SLQ);
				while ($final = mysqli_fetch_assoc($grand)) {
					echo '<tr>';
					echo '<th></th>';
					echo '<th></th>';					
					echo '<th></th>';
					echo '<th><p>' . 'RM ' . $final['Grand_Total'] . '</p></th>';
					echo '<th></th>';
					echo '</tr>';
				}
			}
		?>
			<tr>
				<th></th>
				<th></th>
				<th>
					<form name = "delete" method = "POST" action = "cart.php">
						<input type = "submit" name = "delete" value = "EMPTY CART">
					</form>
				</th>
				<th>
					<form name = "pay" method = "POST" action = "cart.php">
						<input type = "submit" name = "pay" value = "PAY">
					</form>
				</th>
				<th></th>
			</tr>
		</table>

		
		<div class = "gap_50_h"></div>
		
		<footer>
			<p>Copyright &copy 2018, Empire of Shoes. All Rights Reserved.</p>
		</footer>
	</body>
</html>