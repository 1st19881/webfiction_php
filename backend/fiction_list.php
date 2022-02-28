<?php
error_reporting( error_reporting() & ~E_NOTICE );

include('condb.php');  
$sql_t="SELECT f.*,t.type_name,p.p_name FROM fiction as f
JOIN type as t ON f.type_id = t.type_id
JOIN person as p ON f.p_id=p.p_id
ORDER BY f.f_id DESC";

$rs_t = mysqli_query($conn,$sql_t);
$i=1;

	
?>

<table class="table table-bordered table-striped datatable  table-responsive" align="center">
    <thead>
        <tr class="info">
            <th width="15%" scope="col">#</th>
            <th width="15%" class="text-nowrap" scope="col">นิยาย</th>
            <th width="15%" class="text-nowrap" scope="col">หมวดหมู่</th>
            <th width="15%" class="text-nowrap" scope="col">คนแต่ง</th>
            <th width="15%" class="text-nowrap" scope="col">ภาพหน้าปก</th>
            <th width="15%" class="text-nowrap" scope="col">ภาพ</th>
            <th width="15%" class="text-nowrap" scope="col">PDF</th>
            <th width="10%" scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($rowf = mysqli_fetch_array($rs_t)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $rowf['f_name']; ?></td>
        <td><?php echo $rowf['type_name']; ?></td>
        <td><?php echo $rowf['p_name']; ?></td>
        <td><img class="card-img-top" src="../img/<?php echo $rowf['f_banner']; ?>"   alt="..." /></td>
        <td><img class="card-img-top" src="../img/<?php echo $rowf['f_img']; ?>"   alt="..." /></td>
        <td ><?php echo $rowf['f_file']; ?></td>
        <td>
            <div class="d-flex">
                <a href="admin.php?act=edit&ID=<?php echo $row_p['admin_id']; ?>"
                    class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="admin.php?act=delete&admin_id=<?php echo $row_p['admin_id']; ?>"
                    class="btn btn-danger btn-flat"
                    onclick="return confirm('ต้องการลบข้อมุลผู้ดูแลระบบ ID : <?php echo $row_p['admin_id']; ?>')">ลบ</a>
            </div>
        </td>
    </tr>
    <?php }  ?>
</table>