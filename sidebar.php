<?php include('connect/conn.php'); 

$sql_t="SELECT * FROM type";
$rs_t = mysqli_query($conn,$sql_t);

$sql_f="SELECT * FROM fiction 
ORDER BY f_id DESC limit 4";
$rs_f = mysqli_query($conn,$sql_f);
?>           
            
            <div class="col-lg-3">               <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">ค้นหานิยาย</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="พิมชื่อนิยาย" aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">ค้นหา!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">หมวดหมู่นิยาย</div>
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
                        <div class="card-header">นิยายใหม่ล่าสุด</div>
                   <?php foreach($rs_f as $row_f){  ?>
                        <div class="card mb-1" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 ">
                            <img src="backend/img/<?php echo $row_f['f_img']; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 ">
                            <div class="card-body">
                                <h5 class="card-title">เซียนอมตะ 2,500 ปี [我只有两千五百岁]</h5>
                                <p class="card-text">ซูเย่เป็นผู้มีพลังพิเศษทำให้เขามีอายุยืนยาวถึง 2,500 ปี</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                        </div>
                   <?php }  ?>
                    </div>
                </div>



