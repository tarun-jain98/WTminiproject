<?php
require ('config.php');
session_start();
?>


<!DOCTYPE html>
<?php 
      if(isset($_POST['submit'])){
        if (empty($_POST['activity'])) {
          header('Location:teacherform.php');
        } else {
          $activity = $_POST['activity'];
        }
        if (empty($_POST['duration'])) {
          header('Location:teacherform.php');
        } else {
          $duration = $_POST['duration'];
        }

        if (empty($_POST['date'])) {
          header('Location:teacherform.php');
        } else {
          $date = $_POST['date'];
        }

        if (empty($_POST['attendee'])) {
          header('Location:teacherform.php');
        } else {
          $attendee = $_POST['attendee'];
        }

        if (empty($_POST['section'])) {
          header('Location:teacherform.php');
        } else {
          $section = $_POST['section'];
        }

        if (empty($_POST['semester'])) {
          header('Location:teacherform.php');
        } else {
          $semester = $_POST['semester'];
        }
        
        if (empty($_POST['subject'])) {
          header('Location:teacherform.php');
        } else {
          $subject = $_POST['subject'];
        }
        
        $q_1 = $_POST['q_1'];
        $p_1 = $_POST['p_1'];
        $c_1 = $_POST['c_1'];
        $q_2 = $_POST['q_2'];
        $p_2 = $_POST['p_2'];
        $c_2 = $_POST['c_2'];
        $q_3 = $_POST['q_3'];
        $p_3 = $_POST['p_3'];
        $c_3 = $_POST['c_3'];
        $q_4 = $_POST['q_4'];
        $p_4 = $_POST['p_4'];
        $c_4 = $_POST['c_4'];
        $q_5 = $_POST['q_5'];
        $p_5 = $_POST['p_5'];
        $c_5 = $_POST['c_5'];

        $user = $_SESSION["username"];

        $sql = "INSERT INTO teacherform (user_id,activity_type,date,attendees,duration,semester,section,subject,q_1,p_1,c_1,q_2,p_2,c_2,q_3,p_3,c_3,q_4,p_4,c_4,q_5,p_5,c_5) VALUES('$user','$activity','$date','$attendee','$duration','$semester','$section','$subject','$q_1','$p_1','$c_1','$q_2','$p_2','$c_2','$q_3','$p_3','$c_3','$q_4','$p_4','$c_4','$q_5','$p_5','$c_5')";

        if(mysqli_query($conn, $sql)){
          CloseCon($conn);
          header('Location:teacherfirst.php');

          
        } 
        else{
          echo mysqli_error($conn);
          //header('Location:login.php');
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
  <div class="form-row">
  <div class="form-group  col-md-4">
    <label for="activity"><h2>Activity Type:</h2></label>
      <select class="form-control" id="activity" name="activity" required>
      <option></option>
      <option>Tutorial</option>
      <option>Quiz</option>
      <option>Openbook</option>
      <option>Seminar</option>
      </select>
  </div>

<div class="form-group  col-md-4">
  <label for="date"><h2>Date:</h2></label>
  <input type="date" name="date" id="date" required>
</div>

<div class="form-group  col-md-4">
  <label for="noa"><h2>Number of attendee:</h2></label>
  <input type="text" name="attendee" id="noa" required>
</div>



<div class="form-group  col-md-3">
  <label for="duration"><h2>Duration:</h2></label>
  <input type="text" name="duration" id="duration" required>
</div>

<div class="form-group  col-md-3">
  <label for="semester"><h2>Semester:</h2></label>
  <input type="text" name="semester" id="semester" required>
</div>


<div class="form-group  col-md-3">
  <label for="section"><h2>Section:</h2></label>
  <input type="text" name="section" id="section" required>
</div>

<div class="form-group  col-md-3">
  <label for="subject"><h2>Subject:</h2></label>
  <input type="text" name="subject" id="subject" required>
</div>


</div>
<div>
	<label><h2>Question 1</h2></label>
  <br>
  <textarea style="width:100%" name="q_1" required></textarea>
	<div class="form-row">
  <div class="form-group  col-md-2">
    <label for="p_1"><h2>PO:</h2></label>
      <select class="form-control" id="p_1" name="p_1" required>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>
  </div>
  <div class="form-group  col-md-2">
      <label for="c_1"><h2>CO:</h2></label>
        <select class="form-control" id="c_1" name="c_1" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div>
</div>

  <label><h2>Question</h2></label>
  <br>
  <textarea style="width:100%" name="q_2" required></textarea>
  <div class="form-row">
  <div class="form-group  col-md-2">
    <label for="p_2"><h2>PO:</h2></label>
      <select class="form-control" id="p_2" name="p_2" required>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>
  </div>
  <div class="form-group  col-md-2">
      <label for="c_2"><h2>CO:</h2></label>
        <select class="form-control" id="c_2" name="c_2" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div>
</div>

  <label><h2>Question</h2></label>
  <br>
  <textarea style="width:100%" name="q_3" required></textarea>
  <div class="form-row">
  <div class="form-group  col-md-2">
    <label for="p_3"><h2>PO:</h2></label>
      <select class="form-control" id="p_3" name="p_3" required>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>
  </div>
  <div class="form-group  col-md-2">
      <label for="c_3"><h2>CO:</h2></label>
        <select class="form-control" id="c_3" name="c_3" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div>
</div>

  <label><h2>Question</h2></label>
  <br>
  <textarea style="width:100%" name="q_4" required></textarea>
  <div class="form-row">
  <div class="form-group  col-md-2">
    <label for="p_4"><h2>PO:</h2></label>
      <select class="form-control" id="p_4" name="p_4" required>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>
  </div>
  <div class="form-group  col-md-2">
      <label for="c_4"><h2>CO:</h2></label>
        <select class="form-control" id="c_4" name="c_4" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div>
</div>

  <label><h2>Question</h2></label>
  <br>
  <textarea style="width:100%" name="q_5" required></textarea>
  <div class="form-row">
  <div class="form-group  col-md-2">
    <label for="p_5"><h2>PO:</h2></label>
      <select class="form-control" id="p_5" name="p_5" required>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>
  </div>
  <div class="form-group  col-md-2">
      <label for="c_5"><h2>CO:</h2></label>
        <select class="form-control" id="c_5" name="c_5" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div>
</div>
</div>
<input type="submit" style="margin-left: 50%; text-align: center;" class="btn-danger" name="submit">
</form>
</div>
</body>
</html>