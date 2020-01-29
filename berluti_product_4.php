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
			
		if (isset($_POST['add_cart'])) {
			switch ($_POST['size']) {
				case '8':
					$query_1 = "INSERT INTO shopping_cart (Date_Added, User_ID, Shoe_ID) VALUES (now(), '$current_user', '29')";
					mysqli_query($db_found, $query_1);
					break;
				case '9':
					$query_2 = "INSERT INTO shopping_cart (Date_Added, User_ID, Shoe_ID) VALUES (now(), '$current_user', '30')";
					mysqli_query($db_found, $query_2);
					break;
				case '10':
					$query_3 = "INSERT INTO shopping_cart (Date_Added, User_ID, Shoe_ID) VALUES (now(), '$current_user', '31')";
					mysqli_query($db_found, $query_3);
					break;
				case '11':
					$query_4 = "INSERT INTO shopping_cart (Date_Added, User_ID, Shoe_ID) VALUES (now(), '$current_user', '32')";	
					mysqli_query($db_found, $query_4);
					break;
				case '0':
					header ('location: berluti_product_4.php');
					break;
			}
		}
		
		if (isset($_POST['add_wishlist'])) {
			switch ($_POST['size']) {
				case "8":
					$query_5 = "INSERT INTO wishlist (User_ID, Shoe_ID) VALUES ('$current_user', '29')";
					mysqli_query($db_found, $query_5);
					break;
				case "9":
					$query_6 = "INSERT INTO wishlist (User_ID, Shoe_ID) VALUES ('$current_user', '30')";
					mysqli_query($db_found, $query_6);
					break;
				case "10":
					$query_7 = "INSERT INTO wishlist (User_ID, Shoe_ID) VALUES ('$current_user', '31')";
					mysqli_query($db_found, $query_7);
					break;
				case "11":
					$query_8 = "INSERT INTO wishlist (User_ID, Shoe_ID) VALUES ('$current_user', '32')";
					mysqli_query($db_found, $query_8);
					break;
				case '0':
					header ('location: berluti_product_4.php');
					break;
			}
		}
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
				
		<div class = "w3-content" style = "max-width:1100px">

			<div class = "w3-row w3-padding-32" id="about">
				<div class = "w3-col m6 w3-padding-large w3-half">
					<?PHP
						$SQL_1 = "SELECT Shoe_Image FROM shoes WHERE Shoe_ID = 29";
						$a = $db_found -> query($SQL_1);
						$result_1 = mysqli_fetch_array($a);
						echo "<img src = 'Shoe/".$result_1['Shoe_Image']."'></a>";
						
						echo '<div class = "gap_20_h"></div>';
						
						$SQL_2 = "SELECT Shoe_Image FROM shoes WHERE Shoe_ID = 30";
						$b = $db_found -> query($SQL_2);
						$result_2 = mysqli_fetch_array($b);
						echo "<img src = 'Shoe/".$result_2['Shoe_Image']."'></a>";
					?>
				</div>

				<div class = "w3-col m6 w3-padding-large w3-half w3-container">
					<?PHP
						$SQL_3 = "SELECT * FROM shoes WHERE Shoe_ID = 29";
						$c = $db_found -> query($SQL_3);
						$result_3 = mysqli_fetch_array($c);
						echo "<h5>" . $result_3['Shoe_Name'] . "</h5>"; 
						echo "<p>";
						echo "RM " . $result_3['Shoe_Price'] . "<br>";
						
						if ($result_3['Shoe_Status'] = "Y") {
							echo "<p>Available</p><br>";
						} else {
							echo "<p>Sold Out</p><br>";
						}
					?>
					
					<form method = "post" action = "berluti_product_4.php"> 
						<div class = "custom-select">
							<select name = "size">
								<option value = "0">SELECT SIZE</option>
								<option value = "8">8</option>
								<option value = "9">9</option>
								<option value = "10">10</option>
								<option value = "11">11</option>
							</select>
						</div><br>
						
						<input type = "submit" name = "add_cart" value = "ADD TO CART"><br><br>

						<input type = "submit" name = "add_wishlist" value = "ADD TO WISHLIST"><br><br>
					</form>
					
					<p>Standard delivery within 2 - 6 Business Days</p>
					<p>Express delivery within 2 - 4 Business Days</p>	
				</div>
			</div>
		</div>

		<script>
			var x, i, j, selElmnt, a, b, c;
			
			/*look for any elements with the class "custom-select":*/
			
			x = document.getElementsByClassName("custom-select");
			
			for (i = 0; i < x.length; i++) {
				selElmnt = x[i].getElementsByTagName("select")[0];
				
				/*for each element, create a new DIV that will act as the selected item:*/
				
				a = document.createElement("DIV");
				a.setAttribute("class", "select-selected");
				a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
				x[i].appendChild(a);
				
				/*for each element, create a new DIV that will contain the option list:*/
				
				b = document.createElement("DIV");
				b.setAttribute("class", "select-items select-hide");
				
				for (j = 0; j < selElmnt.length; j++) {
					
				/*for each option in the original select element,
				create a new DIV that will act as an option item:*/
				
					c = document.createElement("DIV");
					c.innerHTML = selElmnt.options[j].innerHTML;
					c.addEventListener("click", function(e) {
						
						/*when an item is clicked, update the original select box,
						and the selected item:*/
						
						var y, i, k, s, h;
						s = this.parentNode.parentNode.getElementsByTagName("select")[0];
						h = this.parentNode.previousSibling;
						for (i = 0; i < s.length; i++) {
							if (s.options[i].innerHTML == this.innerHTML) {
								s.selectedIndex = i;
								h.innerHTML = this.innerHTML;
								y = this.parentNode.getElementsByClassName("same-as-selected");
								for (k = 0; k < y.length; k++) {
									y[k].removeAttribute("class");
								}
								this.setAttribute("class", "same-as-selected");
								break;
							}
						}
						h.click();
					});
				b.appendChild(c);
				}
				
				x[i].appendChild(b);
				a.addEventListener("click", function(e) {
					/*when the select box is clicked, close any other select boxes,
					and open/close the current select box:*/
					e.stopPropagation();
					closeAllSelect(this);
					this.nextSibling.classList.toggle("select-hide");
					this.classList.toggle("select-arrow-active");
				});
			}
			
			function closeAllSelect(elmnt) {
				
				/*a function that will close all select boxes in the document,
				except the current select box:*/
				
				var x, y, i, arrNo = [];
				x = document.getElementsByClassName("select-items");
				y = document.getElementsByClassName("select-selected");
				
				for (i = 0; i < y.length; i++) {
					if (elmnt == y[i]) {
						arrNo.push(i)
					} else {
						y[i].classList.remove("select-arrow-active");
					}
				}
				
				for (i = 0; i < x.length; i++) {
					if (arrNo.indexOf(i)) {
						x[i].classList.add("select-hide");
					}
				}
			}
			
			/*if the user clicks anywhere outside the select box,
			then close all select boxes:*/
			
			document.addEventListener("click", closeAllSelect);
		</script>
					
		<footer>
			<p>Copyright &copy 2018, Empire of Shoes. All Rights Reserved.</p>
		</footer>
	</body>
</html>