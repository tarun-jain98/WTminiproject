<?php
require ('config.php');
session_start();
$id = $_SESSION["form_id"];
$sql = "SELECT * FROM `teacherform` WHERE form_id='$id'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<?php 
      if(isset($_POST['submit'])){
        $optradio1 = $_POST['optradio1'];
        $optradio2 = $_POST['optradio2'];
        $optradio3 = $_POST['optradio3'];
        $optradio4 = $_POST['optradio4'];
        $optradio5 = $_POST['optradio5'];
        $user = $_SESSION["username"];
        $sql = "INSERT INTO studentresponse (tform_id, user_id, a_1, a_2, a_3, a_4, a_5) VALUES('$id','$user','$optradio1','$optradio2','$optradio3','$optradio4','$optradio5')";
        if(mysqli_query($conn, $sql)){
          CloseCon($conn);
          header('Location:login.php');
        }
        else{
          echo mysqli_error($conn);
          //header('Location:studentfirst.php');
        }
      }
?>
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
        <center><img  width="125px" src="image/bms.logo.png" alt="BMS Institute of Technology of Management" ></center>
        <div class="row">

         <div class="col-12"><h1 align="center" class="display-4" style="color:#black"> BMS Institute of Technology and Management</h1>
           <h3 class="lead" style="color:black" align="center">OBE System</h3>


         </div>
         </div>
        </div>
        </div>
<form method="post">
<div>
	<label><h4><?php echo $row['q_1']; ?></h4></label>
  <br>
	<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio1" value="1">Extremly unsatisfied
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio1" value="2">Unsatisfied
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio1" value="3">Neutral
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio1"
    value="4">Satisfied
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio1"
    value="5">Extremly Satisfied
  </label>
</div>
</div>

<div>
	<label><h4><?php echo $row['q_2']; ?></h4></label><br>
	 <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio2" 
    value="1">Extremly unsatisfied
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio2"
    value="2">Unsatisfied
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio2"
    value="3">Neutral
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio2"
    value="4">Satisfied
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio2"
    value="5">Extremly Satisfied
  </label>
</div>
</div>

<div>
	<label><h4><?php echo $row['q_3']; ?></h4></label><br>
	 <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio3"
    value="1">Extremly unsatisfied
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio3"
    value="2">Unsatisfied
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio3"
    value="3">Neutral
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio3"
    value="4">Satisfied
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio3"
    value="5">Extremly Satisfied
  </label>
</div>
</div>

<div>
	<label><h4><?php echo $row['q_4']; ?></h4></label><br>
	 <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio4"
    value="1">Extremly unsatisfied
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio4"
    value="2">Unsatisfied
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio4"
    value="3">Neutral
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio4"
    value="4">Satisfied
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio4"
    value="5">Extremly Satisfied
  </label>
</div>
</div>
	<label><h4><?php echo $row['q_5']; ?></h4></label><br>
	 <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio5"
    value="1">Extremly unsatisfied
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio5"
    value="2">Unsatisfied
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio5"
    value="3">Neutral
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio5"
    value="4">Satisfied
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio5"
    value="5">Extremly Satisfied
  </label>
</div>
</div>
<br>
<input type="submit" style="margin-left: 50%; text-align: center;" class="btn-danger" name="submit">
<br><br>
</form>
</div>

</body>
</html>
