<?php 
require ('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<?php 
			if(isset($_POST['submit'])){
				$name = $_POST['name'];

				$sql = "INSERT INTO tbname (name,email) VALUES(?,?)";
				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$name,$email]);
				if($result){
					echo 'success';
				}
				else{
					echo 'there were errors';
				}
			}
		?>
	</div>
</body>
</html>