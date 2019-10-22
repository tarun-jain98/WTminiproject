<?php 
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		session_start();
		$_SESSION["username"]=$username;
		$sql = "SELECT * FROM `users` WHERE username='$username' ";
		$stmtsearch = $db->prepare($sql);
		$result = $stmtsearch->execute();
		if($result){
			echo 'success'
			while($row=mysqli_fetch_array($result))
			{
				echo $row['designation'];
				if ($row['designation']=="student")
				{
					header('Location:studentfirst.php');
				}
				else if ($row['designation']=="teacher")
				{
					header('Location:teacherfirst.php');
				}

			}
		}
		else{
			echo 'there were errors'
		}
	}
 ?>