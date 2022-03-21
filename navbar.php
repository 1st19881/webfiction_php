<?php include('connect/conn.php'); 

$sql_t="SELECT * FROM type";
$rs_t = mysqli_query($conn,$sql_t);

?>

<nav class="navbar navbar-expand-lg navbar-light  py-3"style="background-color:#ffdee0;">
  <div class="container-fluid">
    <h5><a class="navbar-brand" href="index.php"><span>LOGO</span></a></h5>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <h5><a class="nav-link text-dark" href="#"><span>หน้าหลัก</span></a></h5>
        </li>
       <h5><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span>หมวดหมู่</span>
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
          <?php foreach($rs_t as $row_t){ ?>
          <li class="nav-item ">
            <a class="nav-link text-dark" href="index.php?act=show_type&booktype_id=<?php echo $row_t['type_id'];?>"><span><?php echo $row_t['type_name'];?></span></a>
          </li>
          <?php  }?>
          </ul>
        </li></h5>
        <li class="nav-item">
         <h5> <a class="nav-link text-dark" href="#"><span>เกี่ยวกับฉัน</span></a></h5>
        </li>
        <li class="nav-item">
         <h5></h5>
        </li>
      </ul>
      <form >
      <ul class="nav justify-content-end">
      <li class="nav-item">
         <h5> <a class="nav-link text-dark" href="#"><i class="fa-solid fa-user"></i> <span>เข้าสู่ระบบ / สมัครสมาชิก</span></a></h5>
        </li>
        </ul>
      </form>
    </div>
  </div>
</nav>

<!-- <style>

  nav a {
    opacity: 1;
    position: relative;
  }
  
  nav a::before {
    content: '';
    display: block;
    height: 5px;
    background: black;
    position: absolute;
    top: -.25em;
    left: 0;
    right: 0;
    transform: scale(0, 1);
    transition: transform ease-in-out 250ms;
  }
  
  nav a:hover::before {
    transform: scale(1,1);}
}
</style> -->