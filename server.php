<?PHP
	require 'configure.php';
	
	//	CHECKING IF CAN CONNECT TO DATABASE
	
	if ($db_found) {
		$username = "";
		$email = "";
		$fname = "";
		$lname = "";
		$address = "";
		$errors = array(); 

		//	START OF REGISTER USER
		
		if (isset($_POST['reg_user'])) {
			
			// receive all input values from the form
			
			$username = mysqli_real_escape_string($db_found, $_POST['username']);
			$email = mysqli_real_escape_string($db_found, $_POST['email']);
			$password_1 = mysqli_real_escape_string($db_found, $_POST['password_1']);
			$password_2 = mysqli_real_escape_string($db_found, $_POST['password_2']);
			$fname = mysqli_real_escape_string($db_found, $_POST['first_name']);
			$lname = mysqli_real_escape_string($db_found, $_POST['last_name']);
			$address = mysqli_real_escape_string($db_found, $_POST['address']);
			
			// form validation: ensure that the form is correctly filled ...
			// by adding (array_push()) corresponding error unto $errors array
			
			if (empty($username)) { 
				array_push($errors, "Username is required");
			}
			
			if (empty($email)) { 
				array_push($errors, "Email is required"); 
			}
			
			if (empty($password_1)) { 
				array_push($errors, "Password is required"); 
			}
			
			if ($password_1 != $password_2) {
				array_push($errors, "The two passwords do not match");
			}
			
			if (empty($fname)) {
				array_push($errors, "First name is required");
			}
			
			if (empty($lname)) {
				array_push($errors, "Last name is required");
			}
			
			if (empty($address)) {
				array_push($errors, "Shipping address is required");
			}
			
			// first check the database to make sure 
			// a user does not already exist with the same username and/or email
			
			$user_check_query = "SELECT * FROM users WHERE User_Username = '$username' OR User_Email = '$email' LIMIT 1";
			$result = mysqli_query($db_found, $user_check_query);
			$user = mysqli_fetch_assoc($result);
		  
			if ($user) { // if user exists
				if ($user['username'] === $username) {
					array_push($errors, "Username already exists");
				}

				if ($user['email'] === $email) {
					array_push($errors, "Email already exists");
				}
			}

			// Finally, register user if there are no errors in the form
			
			if (count($errors) == 0) {
				$password = md5($password_1);	//encrypt the password before saving in the database

				$query = "INSERT INTO users (User_Username, User_Email, User_Password, User_First_Name, User_Last_Name, User_Shipping_Address) 
						VALUES ('$username', '$email', '$password', '$fname', '$lname', '$address')";
				mysqli_query($db_found, $query);

				header('location: login.php');
			}
		}
		
		//	END OF REGISTER USER
		
		//	START OF LOGIN USER
		
		if (isset($_POST['login_user'])) {
			$username = mysqli_real_escape_string($db_found, $_POST['username']);
			$password = mysqli_real_escape_string($db_found, $_POST['password']);

			if (empty($username)) {
				array_push($errors, "Username is required");
			}
			
			if (empty($password)) {
				array_push($errors, "Password is required");
			}

			if (count($errors) == 0) {
				$password = md5($password);
				$query = "SELECT * FROM users WHERE User_Username = '$username' AND User_Password = '$password'";
				$results = mysqli_query($db_found, $query);
				
				if (mysqli_num_rows($results) == 1) {
					session_start();
					$_SESSION['login'] = $username;
					header('location: redirect.php');
				} else {
					array_push($errors, "Wrong username/password combination");
				}
			}
		}
		
		//	END OF LOGIN USER
				
	} else {
		header('location: error.php');
	}
?>