<?php 

include('connect/conn.php'); 

$sql_t="SELECT * FROM type";
$rs_t = mysqli_query($conn,$sql_t);

$sql_f="SELECT * FROM fiction 
ORDER BY f_id DESC limit 2";
$rs_f = mysqli_query($conn,$sql_f);

$rswf=mysqli_fetch_array($rs_f);



function to_time_ago( $time ) {
      
    // Calculate difference between current
    // time and given timestamp in seconds
    $diff = time() - $time;
      
    if( $diff < 1 ) { 
        return 'less than 1 second ago'; 
    }
      
    $time_rules = array ( 
                12 * 30 * 24 * 60 * 60 => 'year',
                30 * 24 * 60 * 60       => 'month',
                24 * 60 * 60           => 'day',
                60 * 60                   => 'hour',
                60                       => 'minute',
                1                       => 'second'
    );
  
    foreach( $time_rules as $secs => $str ) {
          
        $div = $diff / $secs;
  
        if( $div >= 1 ) {
              
            $t = round( $div );
              
            return $t . ' ' . $str . 
                ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}

?>           
            
            <div class="col-lg-3">               <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header py-3 " style="background-color: #FAECDF;"><span>ค้นหานิยาย </span></div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="พิมชื่อนิยาย" aria-label="Enter search term..." aria-describedby="button-search" style="background-color:#f4f4f4;border-radius:0px;border:none;" />
                                <button class="btn " id="button-search" type="button" style="width:auto;padding:4px;border-radius:0px;background-color:#ff5853;color:white;border-radius:8px;"><span>ค้นหา</span></button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header py-3" style="background-color: #FAECDF;"><span>หมวดหมู่นิยาย</span></div>
                        <div class="card-body">
                            <div class="row">
                        <?php foreach($rs_t as $row_t){ ?>
                                <div class="col-sm-6 py-3">
                                    <ul class="list-unstyled mb-0">
                                        <li ><i class="fa-solid fa-book"></i>  <a href="#" class="text-dark"><?php echo $row_t['type_name'];  ?></a></li>
                                    </ul>
                                </div>
                                <?php  }?>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4 ">
                    <div class="card-header py-3 " style="background-color: #FAECDF;"><span>นิยายใหม่ล่าสุด</span></div>
                   <?php  foreach($rs_f as $row_f){  ?>
                        <div class="card mb-1 p-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 ">
                            <img src="<?php echo $row_f['f_img']; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 ">
                            <div class="card-body">
                                <h5 class="card-title"><b><?php echo $row_f['f_name']; ?></b></h5>
                                <p class="card-text"><?php echo mb_substr($row_f['detail'],0,80);  ?> <a href="detail.php?ID=<?php echo $row_f['f_id']; ?>"><b> ..อ่านเพิ่มเติม</b></a> </p>
                                <p class="card-text"><small class="text-muted"><?php echo to_time_ago(strtotime($row_f['f_date'])) ; ?></small></p>
                            </div>
                            </div>
                        </div>
                        </div>
                   <?php }  ?>
                    </div>
                </div>

