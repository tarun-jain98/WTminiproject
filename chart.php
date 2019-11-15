<?php
require ('config.php');
session_start();
$id = $_GET["id"];
$sql = "SELECT * FROM `studentresponse` WHERE tform_id='$id'";
$result = mysqli_query($conn,$sql);
$a5=$b5=$c5=$d5=$e5=0;
$a1=$b1=$c1=$d1=$e1=0;
$a2=$b2=$c2=$d2=$e2=0;
$a3=$b3=$c3=$d3=$e3=0;
$a4=$b4=$c4=$d4=$e4=0;
while($row=mysqli_fetch_array($result)){
	if($row['a_1']=="1"){
		$a1++;
	}
	if($row['a_1']=="2"){
		$a2++;
	}
	if($row['a_1']=="3"){
		$a3++;
	}
	if($row['a_1']=="4"){
		$a4++;
	}
	if($row['a_1']=="5"){
		$a5++;
	}
	if($row['a_2']=="1"){
		$b1++;
	}
	if($row['a_2']=="2"){
		$b2++;
	}
	if($row['a_2']=="3"){
		$b3++;
	}
	if($row['a_2']=="4"){
		$b4++;
	}
	if($row['a_2']=="5"){
		$b5++;
	}
	if($row['a_3']=="1"){
		$c1++;
	}
	if($row['a_3']=="2"){
		$c2++;
	}
	if($row['a_3']=="3"){
		$c3++;
	}
	if($row['a_3']=="4"){
		$c4++;
	}
	if($row['a_3']=="5"){
		$c5++;
	}
	if($row['a_4']=="1"){
		$d1++;
	}
	if($row['a_4']=="2"){
		$d2++;
	}
	if($row['a_4']=="3"){
		$d3++;
	}
	if($row['a_4']=="4"){
		$d4++;
	}
	if($row['a_4']=="5"){
		$d5++;
	}
	if($row['a_5']=="1"){
		$e1++;
	}
	if($row['a_5']=="2"){
		$e2++;
	}
	if($row['a_5']=="3"){
		$e3++;
	}
	if($row['a_5']=="4"){
		$e4++;
	}
	if($row['a_5']=="5"){
		$e5++;
	}
}

$sql = "SELECT * FROM `teacherform` WHERE form_id='$id'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
?>

<?php
 
$dataPoints1 = array( 
	array("label" => $row['q_1'],  "y" => $a1 ),
	array("label" => $row['q_2'], "y" => $b1 ),
	array("label" => $row['q_3'], "y" => $c1 ),
	array("label" => $row['q_4'],  "y" => $d1 ),
	array("label" => $row['q_5'],  "y" => $e1 )
);
 
$dataPoints2 = array( 
	array("label" => $row['q_1'],  "y" => $a2 ),
	array("label" => $row['q_2'], "y" => $b2 ),
	array("label" => $row['q_3'], "y" => $c2 ),
	array("label" => $row['q_4'],  "y" => $d2 ),
	array("label" => $row['q_5'],  "y" => $e2 )
);
 
$dataPoints3 = array( 
	array("label" => $row['q_1'],  "y" => $a3 ),
	array("label" => $row['q_2'], "y" => $b3 ),
	array("label" => $row['q_3'], "y" => $c3 ),
	array("label" => $row['q_4'],  "y" => $d3 ),
	array("label" => $row['q_5'],  "y" => $e3 )
);
 
$dataPoints4 = array( 
	array("label" => $row['q_1'],  "y" => $a4 ),
	array("label" => $row['q_2'], "y" => $b4 ),
	array("label" => $row['q_3'], "y" => $c4 ),
	array("label" => $row['q_4'],  "y" => $d4 ),
	array("label" => $row['q_5'],  "y" => $e4 )
);

$dataPoints5 = array( 
	array("label" => $row['q_1'],  "y" => $a5 ),
	array("label" => $row['q_2'], "y" => $b5 ),
	array("label" => $row['q_3'], "y" => $c5 ),
	array("label" => $row['q_4'],  "y" => $d5 ),
	array("label" => $row['q_5'],  "y" => $e5 )
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Report of Student Responses"
	},
	toolTip: {
		shared: true
	},
	axisY: {
		title: "Percentage of Users",
		suffix: "%"
	},
	data: [{
		type: "stackedBar100",
		name: "Extremely dis-satisfied",
		yValueFormatString: "#,##0\"%\"",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "stackedBar100",
		yValueFormatString: "#,##0\"%\"",
		name: "Dis-satisfied",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	},{
		type: "stackedBar100",
		yValueFormatString: "#,##0\"%\"",
		name: "Neutral",
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	},{
		type: "stackedBar100",
		yValueFormatString: "#,##0\"%\"",
		name: "Satisfied",
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	},{
		type: "stackedBar100",
		yValueFormatString: "#,##0\"%\"",
		name: "Extemely Satisfied",
		dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
	}
	]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>         
