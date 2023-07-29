<?php include 'header.php';?>

<?php $value.='<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:100px;">
    <div class="card">
        <h5 class="card-header" ><span style="float: left">'. $_GET['name'].'</span> <span style="float: right">Total Marks: 100</span></h5>
        
        <div class="card-body">
            <h3 style="text-align: center;">5*1=5 Marks</h3>';
		 
              $i=1;
              $sql = "SELECT * from question where subject_ids='".$_GET['id']."' AND mark='1' ORDER BY RAND() LIMIT 5 ";
                        $res= mysqli_query($con, $sql);
                        while($row=mysqli_fetch_array($res)) { 
                          
                         
                         $value.='<h4><span><?php echo $i ;?>) </span>'. $row ['question'].'</h4>'; ?>
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
</div>' ; ?>