<html>
<head></head>

<body>
<?php
//constants
DEFINE("DB_Host", "localhost");
DEFINE("DB_User", "NBStud");
DEFINE("DB_Password", "Superbros");
DEFINE("DB_Name", "login_db");


$dbc = new mysqli(DB_Host, DB_User, DB_Password, DB_Name);
			
			if(mysqli_connect_errno()) {
				printf("Cannot connect: %s\n", mysqli_connect_error());
				exit();
				}
				

?>
</body>
</html>