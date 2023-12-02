<html>
<head></head>

<body>
<?php
//constants
DEFINE("DB_Host", "localhost");
DEFINE("DB_Name", "game_db");


$dbc = new mysqli(DB_Host, DB_Name);
			
			if(mysqli_connect_errno()) {
				printf("Cannot connect: %s\n", mysqli_connect_error());
				exit();
				}
				

?>
</body>
</html>