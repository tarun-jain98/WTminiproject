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

        <div class="jumbotron" style="background:white">

        <div class="container-fluid">
        <center><img  width="125px" src="image/bms.logo.png" alt="BMS Institute of Technology of Management" ></center>
        <div class="row">

         <div class="col-12"><h1 align="center" class="display-4" style="color:#black"> BMS Institute of Technology and Management</h1>
           <h3 class="lead" style="color:black" align="center">OBE System</h3>



         </div>
         </div>
        </div>
        </div>
<form class="login-form" action="#" method="post">        
  <div class="form-row">
	<div class="form-group  col-md-4">
		<label for="s"><h2>Subject:</h2></label>
  		<select class="form-control" id="s">
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
    	<option>4</option>
  		</select>
	</div>

	<div class=" form-group col-md-4">
		<label for="se"><h2>Faculty:</h2></label>
  		<select class="form-control" id="se" name="teacher">
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
    	<option>4</option>
  		</select>
	</div>
  	
  	<div class="form-group  col-md-4">
		<label for="sel"><h2>Activity:</h2></label>
  		<select class="form-control" id="sel" name="activity">
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
    	<option>4</option>
  		</select>
	</div>       
</div>

<input type="submit" style="margin-left: 50%; text-align: center;" class="btn-danger" value="Submit">
</form>
<?php 
      if(isset($_POST['submit'])){
        $teacher = $_POST['teacher'];
        $activity = $_POST['activity'];

        $sql = "SELECT form_id FROM teacherform WHERE activity_type=='$activity' and user_id in(SELECT username FROM user WHERE name=='$teacher')";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute();
        if($result){
          session_start();
          $_SESSION["form_id"]=$result;
          header('Location:studentform.php');
        }
        else{
          header('Location:login.php');
        }
      }
?>
</body>
</html>

