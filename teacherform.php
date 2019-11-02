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
        <center><img  width="125px" src="image/bms.logo.png" alt="BMS Institute of Technology of Management" ></center>
        <div class="row">

         <div class="col-12"><h1 align="center" class="display-4" style="color:#black"> BMS Institute of Technology and Management</h1>
           <h3 class="lead" style="color:black" align="center">OBE System</h3>



         </div>
         </div>
        </div>
        </div>
<div>

  <div class="form-row">
  <div class="form-group  col-md-4">
    <label for="activity"><h2>Activity Type:</h2></label>
      <select class="form-control" id="activity" name="activity">
      <option></option>
      <option>Tutorial</option>
      <option>Quiz</option>
      <option>Openbook</option>
      <option>Seminar</option>
      </select>
  </div>

<div class="form-group  col-md-4">
  <label for="date"><h2>Date:</h2></label>
  <input type="date" name="date" id="date">
</div>

<div class="form-group  col-md-4">
  <label for="noa"><h2>Number of attendee:</h2></label>
  <input type="text" name="attendee" id="noa">
</div>



<div class="form-group  col-md-4">
  <label for="duration"><h2>Duration:</h2></label>
  <input type="text" name="duration" id="duration">
</div>

<div class="form-group  col-md-4">
  <label for="semester"><h2>Semester:</h2></label>
  <input type="text" name="semester" id="semester">
</div>


<div class="form-group  col-md-4">
  <label for="section"><h2>Section:</h2></label>
  <input type="text" name="section" id="section">
</div>


</div>









<div>
	<label><h2>Question 1</h2></label>
  <br>
  <textarea style="width:100%" name="q_1"></textarea>
	<div class="form-row">
  <div class="form-group  col-md-2">
    <label for="p_1"><h2>PO:</h2></label>
      <select class="form-control" id="p_1" name="p_1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>
  </div>
  <div class="form-group  col-md-2">
      <label for="c_1"><h2>CO:</h2></label>
        <select class="form-control" id="c_1" name="c_1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div>
</div>

<div>
  <label><h2>Question</h2></label>
  <br>
  <textarea style="width:100%" name="q_2"></textarea>
  <div class="form-row">
  <div class="form-group  col-md-2">
    <label for="p_2"><h2>PO:</h2></label>
      <select class="form-control" id="p_2" name="p_2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>
  </div>
  <div class="form-group  col-md-2">
      <label for="c_2"><h2>CO:</h2></label>
        <select class="form-control" id="c_2" name="c_2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div>
</div>

<div>
  <label><h2>Question</h2></label>
  <br>
  <textarea style="width:100%" name="q_3"></textarea>
  <div class="form-row">
  <div class="form-group  col-md-2">
    <label for="p_3"><h2>PO:</h2></label>
      <select class="form-control" id="p_3" name="p_3">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>
  </div>
  <div class="form-group  col-md-2">
      <label for="c_3"><h2>CO:</h2></label>
        <select class="form-control" id="c_3" name="c_3">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div>
</div>

<div>
  <label><h2>Question</h2></label>
  <br>
  <textarea style="width:100%" name="q_4"></textarea>
  <div class="form-row">
  <div class="form-group  col-md-2">
    <label for="p_4"><h2>PO:</h2></label>
      <select class="form-control" id="p_4" name="p_4">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>
  </div>
  <div class="form-group  col-md-2">
      <label for="c_4"><h2>CO:</h2></label>
        <select class="form-control" id="c_4" name="c_4">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div>
</div>

<div>
  <label><h2>Question</h2></label>
  <br>
  <textarea style="width:100%" name="q_5"></textarea>
  <div class="form-row">
  <div class="form-group  col-md-2">
    <label for="p_5"><h2>PO:</h2></label>
      <select class="form-control" id="p_5">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>
  </div>
  <div class="form-group  col-md-2">
      <label for="c_5"><h2>CO:</h2></label>
        <select class="form-control" id="c_5" name="c_5">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
    </div>
</div>
</div>
<input type="submit" style="margin-left: 50%; text-align: center;" class="btn-danger" value="Submit">
</form>
<?php 
      if(isset($_POST['submit'])){
        $activity = $_POST['activity'];
        $date = $_POST['date'];
        $duration = $_POST['duration'];
        $semester = $_POST['semester'];
        $section = $_POST['section'];
        $attendee = $_POST['attendee'];
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

        $user = $_SESSION["user"];

        $sql = "INSERT INTO teacherform (user_id,activity_type,date,attendees,duration,semester,section,q_1,p_1,c_1,q_2,p_2,c_2,q_3,p_3,c_3,q_4,p_4,c_4,q_5,p_5,c_5) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$user,$activity,$date,$attendee,$duration,$semester,$section,$q_1,$p_1,$c_1,$q_2,$p_2,$c_2,$q_3,$p_3,$c_3,$q_4,$p_4,$c_4,$q_5,$p_5,$c_5]);

        if($result){
          header('Location:teacherfirst.php');
        }
        else{
          header('Location:login.php');
        }
      }
?>
</body>
</html>