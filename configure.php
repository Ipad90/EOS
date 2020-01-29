<?PHP
	define('DB_SERVER', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'FireWater_420');	
	define('DB_NAME', 'empire_of_shoes');
	
	$db_found = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
?>