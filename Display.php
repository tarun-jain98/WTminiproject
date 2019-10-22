<?php 
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<?php 
			$sql = "SELECT * FROM 'TBNAME' WHERE ";
			$stmtinsert = $db->prepare($sql);
			$result = $stmtinsert->execute();
			if($result){
				echo 'success'
				while($row=mysqli_fetch_array($result))
				{
					echo $row['fname'];
				}
			}
			else{
				echo 'there were errors'
			}
		
		?>
	</div>
</body>
</html>