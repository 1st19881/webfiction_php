<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>ระบบXXXX</title>
</head>
<body oncontextmenu="return false;">
    
<?php 
include("jumbotron.php"); 
include("carousel.php"); 
?>


<div class="container">
<?php 
include("navbar.php");
?>



  <!-- Page header with logo and tagline-->
  <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">ยินดีตอนรับเข้าสู่เว็บไซต์ อ่านนิยายฟรี คลังนิยาย</h1>
                    <p class="lead mb-0">นิยายออนไลน์ อ่านฟรี ไม่   </p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
                <?php
                    // $act = (isset($_GET['act']) ? $_GET['act'] : '');
                    // if($act=="login"){
                    //     include('login.php');
                    // }elseif($act=="loginadmin"){
                    //     include('loginadmin.php'); 
                    // }elseif($s!=""){
                    //     include('search.php');   
                    // }elseif($act=="regis"){
                    //     include('register.php');
                    // }elseif($act=="show_type"){
                    //     include('show_type.php');
                    // }else{
                    include('show.php');
                    // }
                ?>
                <!-- Side widgets-->
                <?php 

                include("sidebar.php"); 

                ?>
            </div>
        </div>


</div>

<?php 

include("js/app.php"); 

?>


</body>
</html>

<style>
    .baseBlock {
	margin: 0px 0px 35px 0px;
	padding: 0 0 15px 0px;
	border-radius: 5px;
	overflow: hidden;
	min-height: 390px;
	background: #fff;
	-moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
	-o-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
	transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.baseBlock:hover {
	-webkit-transform: translate(0, -8px);
	-moz-transform: translate(0, -8px);
	-ms-transform: translate(0, -8px);
	-o-transform: translate(0, -8px);
	transform: translate(0, -8px);
	box-shadow: 0 40px 40px rgba(0, 0, 0, 0.2);
}

</style>