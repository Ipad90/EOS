<?PHP
  // Create database connection
  $db = mysqli_connect("localhost", "root", "FireWater_420", "empire_of_shoes");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];

  	// image file directory
  	$target = "Shoe/".basename($image);

  	$sql = "INSERT INTO shoes (Shoe_Image) VALUES ('$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT Shoe_Image FROM shoes");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Image Upload</title>
		<style type="text/css">
			#content{
				width: 50%;
				margin: 20px auto;
				border: 1px solid #cbcbcb;
			}
			
			form{
				width: 50%;
				margin: 20px auto;
			}
			
			form div{
				margin-top: 5px;
			}
			
			#img_div{
				width: 80%;
				padding: 5px;
				margin: 15px auto;
				border: 1px solid #cbcbcb;
			}
			
			#img_div:after{
				content: "";
				display: block;
				clear: both;
			}
			
			img{
				float: left;
				margin: 5px;
				width: 300px;
				height: 140px;
			}
		</style>
	</head>
	
	<body>
		<div id = "content">
			<?PHP
				while ($row = mysqli_fetch_array($result)) {
					echo "<div id = 'img_div'>";
					echo "<img src = 'Shoe/".$row['Shoe_Image']."' >";
				echo "</div>";
				}
			?>
			<form method = "POST" action = "upload.php" enctype = "multipart/form-data">
				<input type = "hidden" name = "size" value = "1000000">
				<div>
					<input type = "file" name = "image">
				</div>
				
				<div>

				</div>
				
				<div>
					<button type = "submit" name = "upload">POST</button>
				</div>
			</form>
		</div>
	</body>
</html>