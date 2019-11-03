<?php 
require ('config.php');
?>
<!DOCTYPE html>
<html>
 <head>
  <Title>OBE</title>
    <link rel="icon" type="image/ico" href="image/calculator.png" />
    <link rel="stylesheet" type="text/css" href="css/theme.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      </head>
      <marquee style="padding:5px;color:#212121;" direction = "right">This OBE process is completely anonymous.</marquee>
      <body style="background:#c3d1f8">
      	<div class="container">
      		
        <div class="jumbotron" style="background:white">

        <div class="container-fluid">
        <center><img  width="100px" src="image/bms.logo.png" alt="BMS Institute of Technology of Management" ></center>
        <div class="row">

         <div class="col-12"><h1 align="center" class="display-4" style="color:#black"> BMS Institute of Technology and Management</h1>
           <h3 class="lead" style="color:black" align="center">OBE System</h3>

         </div>
         </div>
        </div>
        </div>


<div class="login-page">
  <div style="margin-top:-15%;" class="form">

    <p>LOGIN</p>
    <form method="post">
      <input style="background:#f5f5f5; color:#212121" type="text" name="username" placeholder="Username">
      <input style="background:#f5f5f5; color:#212121" type="password" name="password" placeholder="Password">
      <input type="submit" name="submit" class="btn btn-outline-success" value="Sign In">
      <!-- <a href="" target="_blank" style="color:#616161"><strong>Help Form</strong></a> -->
    </form>

  </div>
</div>
<?php
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		session_start();
		$_SESSION["username"]=$username;
		$sql = "SELECT * FROM `user` WHERE username='$username' and password=$password ";
		$result = mysqli_query($conn,$sql);
		if($result){
			echo 'success';
			while($row=mysqli_fetch_array($result))
			{
				echo $row['designation'];
				$_SESSION["name"]=$row['name'];
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
			mysqli_error($conn);
			echo "<h2 style='text-align:center;'>Invalid Username or Password</h2>";
		}
	}
 ?>
</div>
</body>
</html>
