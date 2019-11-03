<?php
require ('config.php');
session_start();
$user = $_SESSION["username"];
$sql = "SELECT * FROM `teacherform` WHERE user_id='$user'";
$result = mysqli_query($conn,$sql);
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


<div class="container" style="margin-top:3%"\>
  <h3>Consolidated Report: OBE</h3>

    <table id="consolidated" class="ui celled table" style="margin-top:2%">
  <thead>
    <tr><th>Activity</th>
      <th>Date</th>
      <th>Duration</th>
      <th>Semester</th>
      <th>Section</th>
      <th>Attendees</th>
      <th>Responses</th>
  </tr></thead>
  <tbody>
      <?php 
      while($row=mysqli_fetch_array($result)){
      ?>
        <tr>
      <td><?php echo $row['activity_type']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['duration']; ?></td>
      <td><?php echo $row['semester']; ?></td>
      <td><?php echo $row['section']; ?></td>
      <td><?php echo $row['attendees']; ?></td>
      <td><?php 
        $fid = $row['form_id'];
        $sql = "SELECT count(*) FROM `studentresponse` WHERE tform_id='$fid'";
        $res = mysqli_query($conn,$sql);
        $r=mysqli_fetch_array($res);
        echo $r[0];?></td>
        
      </tr>
 
      <?php 
      }
      ?>

  </tbody>
</table>
</div>
</div>

</body>
</html>