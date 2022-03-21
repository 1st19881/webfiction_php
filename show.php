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
                            <div class="card mb-4 baseBlock"style="border:none;border-radius:10px">
                                <a href="#!">
                                    <div class="watermarked">
                                         <img class="card-img-top" src="<?php echo $row['f_banner']; ?>"    alt="..." />
                                    </div>
                                   
                                </a>
                                <div class="card-body">
                                    <div class="small text-muted"><?php echo $row['f_date']; ?></div>
                                    <h5 class="card-title py-3" style=""><b><?php echo $row['f_name']; ?></b></h5>
                                    <div class="d-flex justify-content-center">
                                    <a class="btn " href="detail.php?ID=<?php echo $row['f_id'];  ?>" style="width:auto;padding:4px;border-radius:7px;background-color:#ff5853;color:white;">อ่านเพิ่มเติม →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <?php  } ?>         
                    </div>
                    <!-- Pagination-->
                </div>
                

                <style>
                    .watermarked {
                    position: relative;
                    }

                    .watermarked:after {
                    content: "";
                    display: block;
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    background-image: url("https://cdn.discordapp.com/attachments/947037497463046204/950022004793286726/ff8157d4ab6ce4d9.png");
                    background-size: 100% 100%;
                    background-position: 5px 30px;
                    background-repeat: no-repeat;
                    opacity: 0.7;
                    }
                </style>