<?php    
 function fetch_data()    
 {    
      $output = '';    
      $conn = new mysqli("localhost", "root", "","OBE") or die("Connect failed: %s\n". $conn -> error);    
      $sql = "SELECT * FROM teacherform";    
      $result = mysqli_query($conn, $sql); 
      
           
      while($row = mysqli_fetch_array($result))
          
      {         $fid = $row['form_id'];
    $sql = "SELECT count(*) FROM `studentresponse` WHERE tform_id='$fid'";
        $res = mysqli_query($conn,$sql);
        $r=mysqli_fetch_array($res);
        $u=$row["user_id"];
        $sql = "SELECT name FROM user WHERE username='$u'";
        $res = mysqli_query($conn,$sql);
        $a=mysqli_fetch_array($res);

      $output .= '<tr>    <td>'.$a[0].'</td>  
                          <td>'.$row["activity_type"].'</td>    
                          <td>'.$row["date"].'</td>    
                             
                          <td>'.$row["duration"].'</td>   
                          <td>'.$row["semester"].'</td>   
                          <td>'.$row["section"].'</td> 
                          <td>'.$row["attendees"].'</td>   
                          <td>'.$r[0].'</td>   

                     </tr>    
                          ';    
      }    
      return $output;    
 }    
 if(isset($_POST["generate_pdf"]))    
 {    
      require_once('tcpdf/tcpdf.php');    
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
      $obj_pdf->SetCreator(PDF_CREATOR);    
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");    
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);    
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));    
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));    
      $obj_pdf->SetDefaultMonospacedFont('helvetica');    
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);    
      $obj_pdf->setPrintHeader(false);    
      $obj_pdf->setPrintFooter(false);    
      $obj_pdf->SetAutoPageBreak(TRUE, 10);    
      $obj_pdf->SetFont('helvetica', '', 11);    
      $obj_pdf->AddPage();    
      $content = '';    
      $content .= '    
      <h4 align="center">OBE REPORT</h4><br />   
      <table border="1" cellspacing="0" cellpadding="3">    
           <tr> 
                <th >Faculty</th>    
                <th >Activity</th>    
                <th >Date</th>    
                <th >Duration </th>    
                <th >Semester</th>    
                <th >Section</th>  
                <th >Attendees</th>  
                <th >Responses</th>  
                 
           </tr>    
                  
      ';    
      $content .= fetch_data();    
      $content .= '</table>';    
      $obj_pdf->writeHTML($content);    
      $obj_pdf->Output('file.pdf', 'I');    
 }    
 ?>    
 <!DOCTYPE html>    
 <html>    
      <head>    
          
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />              
      </head>    
      <body>    
           <br />  
           <div class="container">    
                <h4 align="center"> OBE REPORT</h4><br />    
                <div class="table-responsive">    
                    <div class="col-md-12" align="right">  
                     <form method="post">    
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />    
                     </form>    
                     </div>  
                     <br/>  
                     <br/>  
                     <table class="table table-bordered">    
                          <tr>    
                              <th width="30%">Faculty</th>    
                <th width="20%">Activity</th>    
                <th width="15%">Date</th>    
                <th width="10%">Duration </th>    
                <th width="5%">Semester</th>    
                <th width="5%">Section</th>  
                <th width="10%">Attendees</th>  
                <th width="5%">Responses</th>  
                    
                          </tr>    
                     <?php    
                     echo fetch_data();    
                     ?>    
                     </table>    
                </div>    
           </div>    
      </body>    
</html>    
