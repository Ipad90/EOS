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
				<li class = "w3-mobile active"><a class = "active" href = "berluti.php">BERLUTI</a></li>
				<li class = "w3-mobile active"><a href = "pedro.php">PEDRO</a></li>
				<li class = "w3-mobile active"><a href = "profile.php">PROFILE</a></li>
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
				<th>
					<?PHP
						$SQL_1 = "SELECT Shoe_Image FROM shoes WHERE Shoe_ID = 17";
						$a = $db_found -> query($SQL_1);
						$result_1 = mysqli_fetch_array($a);
						echo '<a href = "berluti_product_1.php">';
						echo "<img src = 'Shoe/".$result_1['Shoe_Image']."'></a>";
					?>
				</th>
				
				<th><div class = "gap_20_w"></div></th>
				
				<th>
					<?PHP
						$SQL_2 = "SELECT Shoe_Image FROM shoes WHERE Shoe_ID = 21";
						$B = $db_found -> query($SQL_2);
						$result_2 = mysqli_fetch_array($B);
						echo '<a href = "berluti_product_2.php">';
						echo "<img src = 'Shoe/".$result_2['Shoe_Image']."'></a>";
					?>
				</th>
			</tr>
			
			<tr>
				<th><p>
					<?PHP 
						$SQL_3 = "SELECT Shoe_Name FROM shoes WHERE Shoe_ID = 17";
						$c = $db_found -> query($SQL_3);
						$result_3 = mysqli_fetch_array($c);
						echo $result_3['Shoe_Name'];
					?>
				</p></th>
				
				<th><div class = "gap_20_w"></div></th>
				
				<th><p>
					<?PHP 
						$SQL_4 = "SELECT Shoe_Name FROM shoes WHERE Shoe_ID = 21";
						$d = $db_found -> query($SQL_4);
						$result_4 = mysqli_fetch_array($d);
						echo $result_4['Shoe_Name'];
					?>
				</p></th>
			</tr>
			
			<tr>
				<th>
					<?PHP
						$SQL_5 = "SELECT Shoe_Image FROM shoes WHERE Shoe_ID = 25";
						$e = $db_found -> query($SQL_5);
						$result_5 = mysqli_fetch_array($e);
						echo '<a href = "berluti_product_3.php">';
						echo "<img src = 'Shoe/".$result_5['Shoe_Image']."'></a>";
					?>
				</th>
					
				<th><div class = "gap_20_w"></div></th>
				
				<th>
					<?PHP
						$SQL_6 = "SELECT Shoe_Image FROM shoes WHERE Shoe_ID = 29";
						$f = $db_found -> query($SQL_6);
						$result_6 = mysqli_fetch_array($f);
						echo '<a href = "berluti_product_4.php">';
						echo "<img src = 'Shoe/".$result_6['Shoe_Image']."'></a>";
					?>
				</th>
			</tr>
			
			<tr>
				<th><p>
					<?PHP 
						$SQL_7 = "SELECT Shoe_Name FROM shoes WHERE Shoe_ID = 29";
						$g = $db_found -> query($SQL_7);
						$result_7 = mysqli_fetch_array($g);
						echo $result_7['Shoe_Name'];
					?>
				</p></th>
				
				<th><div class = "gap_20_w"></div></th>
				
				<th><p>
					<?PHP 
						$SQL_8 = "SELECT Shoe_Name FROM shoes WHERE Shoe_ID = 29";
						$h = $db_found -> query($SQL_8);
						$result_8 = mysqli_fetch_array($h);
						echo $result_8['Shoe_Name'];
					?>
				</p></th>
			</tr>
		</table>
		
		<div class = "gap_50_h"></div>

		<footer>
			<p>Copyright &copy 2018, Empire of Shoes. All Rights Reserved.</p>
		</footer>
	</body>
</html>