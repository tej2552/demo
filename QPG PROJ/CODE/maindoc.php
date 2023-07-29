<?php
include 'header.php';
$apikey = '07b206cc-237c-4aab-bbc5-1a2f2d84992b';

$value='<div style="margin-left:auto;margin-right:auto;width:500px;text-align:center;">
<h1>Demo Public School</h1>
<h5>Affilliated to CBSE, Affilliation No.223366<br>Address 123,Address,State.</h5>
<h5>Ph:011-44556655, Email: Demo@yahoo.com</h5>
<h2>Academic Session: 2023-2024 <br> Question Paper</h2>
</div><div style="clear:both;"></div>';

$value.='<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:30px;margin-left:30px;margin-right:30px;">
    <div class="card" style="margin:30px;">
        <h5 class="card-header" ><span style="float: left">'. $_GET['name'].'</span> <span style="float: right">Total Marks: 100</span></h5>
        
        <div class="card-body">
            <h3 style="text-align: center;">5*1=5 Marks</h3>';
         
              $i=1;
              $sql = "SELECT * from question where subject_ids='".$_GET['id']."' AND mark='1' ORDER BY RAND() LIMIT 5 ";
                        $res= mysqli_query($con, $sql);
                        while($row=mysqli_fetch_array($res)) { 
                          
                         
                         $value.='<h4><span>'. $i.') </span>'. $row ['question'].'</h4>'; ?>
                     <?php $i++; }  

                     $value.= ' <h3 style="text-align: center;">5*2=10 Marks</h3>';
              
              $i=1;
              $sql = "SELECT * from question where subject_ids='".$_GET['id']."' AND mark='2' ORDER BY RAND() LIMIT 5 ";
                        $res= mysqli_query($con, $sql);
                        while($row=mysqli_fetch_array($res)) { 
                         
                         $value.='<h4><span>'. $i.') </span>'. $row ['question'].'</h4>';
                     $i++; } 

                     $value.='<h3 style="text-align: center;">5*5=25 Marks</h3>';
              
              $i=1;
              $sql = "SELECT * from question where subject_ids='".$_GET['id']."' AND mark='5' ORDER BY RAND() LIMIT 5 ";
                        $res= mysqli_query($con, $sql);
                        while($row=mysqli_fetch_array($res)) { 
                         
                        $value.='<h4><span>'. $i.') </span>'. $row ['question'].'</h4>';
                      $i++; } 
                       $value.='<h3 style="text-align: center;">6*10=60 Marks</h3>';
            
              $i=1;
              $sql = "SELECT * from question where subject_ids='".$_GET['id']."' AND mark='10' 
              ORDER BY RAND() LIMIT 6 ";
                        $res= mysqli_query($con, $sql);
                        while($row=mysqli_fetch_array($res)) { 
                         $value.='<h4><span>'. $i.') </span>'. $row ['question'].'</h4>';
                          $i++; } 
        $value.='</div>
    </div>
</div>' ; 



$postdata = http_build_query(
array(
'apikey' => $apikey,
'value' => $value,
'MarginBottom' => '30',
'MarginTop' => '10'
)
);
 
$opts = array('http' =>
array(
'method'=> 'POST',
'header'=> 'Content-type: application/x-www-form-urlencoded',
'content' => $postdata
)
);
 
$context= stream_context_create($opts);
 
// Convert the HTML string to a PDF using those parameters
$result = file_get_contents('http://api.html2pdfrocket.com/pdf', false, $context);
 
// Save to root folder in website
$a = rand(1,100);
$a = file_put_contents('studentreport.pdf', $result);

?>
<br><Br><br><br>
<a class="btn btn-success btn-block btn-lg" href="studentreport.pdf" target="_blank"><i class="lnr lnr-download"></i> Download Term 2 Report card </a>
