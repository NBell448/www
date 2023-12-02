<?php
include ("connection2.php");
	$con = new PDO("mysql:host=localhost;dbname=games_db",'NBStud','Superbros');
	if(isset($_POST["submit"])){
		$str = $_POST["search"];
		$sth = $con->prepare("SELECT * FROM 'search' WHERE Name = '$str'");
		
		$sth->setFetchMode(PDO:: FETCH_OBJ);
		$sth -> execute();
		
		if($row = $sth -> fetch())
		{
			?>
			<br><br><br>
			<table>
				<tr>
					<th>Name</th>
					<th>Description</th>
				</tr>
				<tr>
					<td><?php echo $row->Name; ?></td>
					<td><?php echo $row->Description;?></td>
			</table>
		<?php
		}
		
			
			else{
				echo "Name does not exist";
			}

?>

<html>
<head>
	<title></title>
</head>
<body>

	<style type = "text/css">
	    #text{
			
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		}
		
		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: Lightblue;
			border: none;
		}

		#box{
			background-color: grey;
			margin: auto;
			width: 300px;
			padding: 20px;
		}
		</style>
		
		<p>aslk;daskdl;asdklfjads</p>
		
		
  </form>
</body>
</html>