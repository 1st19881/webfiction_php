<?php include('connect/conn.php'); 

$sql_t="SELECT f.* FROM fiction as f
JOIN type as t ON f.type_id = t.type_id
JOIN person as p ON f.p_id=p.p_id
ORDER BY f.f_id DESC";

$rs_t = mysqli_query($conn,$sql_t);

?>
<h2 class="fw-bolder py-3">นิยายแนะนำ</h2>
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-9">
                    <!-- Featured blog post-->
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                <?php foreach($rs_t as $row) {  ?>        
                        <div class="col-lg-3">
                            <!-- Blog post-->
                            <div class="card mb-4 baseBlock"style="border-style: none;">
                                <a href="#!"><img class="card-img-top" src="backend/img/<?php echo $row['f_banner']; ?>"   alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted"><?php echo $row['f_date']; ?></div>
                                    <h5 class="card-title py-3" style=""><?php echo $row['f_name']; ?></h5>
                                    <a class="btn " href="detail.php?ID=<?php echo $row['f_id'];  ?>" style="border-radius:23px;background-color:#ff5853;color:white;">อ่านเพิ่มเติม →</a>
                                </div>
                            </div>
                        </div>
                     <?php  } ?>         
                    </div>
                    <!-- Pagination-->
                </div>
                