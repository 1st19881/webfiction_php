<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link … href="style.css?v=<?php echo filemtime(‘style.css’); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>ระบบXXXX</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
span,
p,    
h1,
h2,
h3,
h4
 {
    font-family: 'Kanit', sans-serif; 
}
body{
    background-color:#ffdee0;
}
</style>
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
  <header class="py-5  mb-4 " style="background-color:#ffdee0;">
            <div class="container">
                <div class="text-center my-5" >
                    <h1 class="fw-bolder">ยินดีตอนรับเข้าสู่เว็บไซต์ คลังนิยาย อ่านนิยายฟรี </h1>
                    <p class="lead mb-0">นิยายออนไลน์ อ่านฟรี </p>
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

   <!-- ส่วนที่ 2 -->
   <!-- <canvas class="snow" id="snow" width="1848" height="515"></canvas> -->

    <!-- ส่วนที่ 3 -->
    <script>
        (function () {
    
        var canvas, ctx;
        var points = [];
        var maxDist = 100;
    
        function init() {
            //Add on load scripts
            canvas = document.getElementById("snow");
            ctx = canvas.getContext("2d");
            resizeCanvas();
            pointFun();
            setInterval(pointFun, 20);
            window.addEventListener('resize', resizeCanvas, false);
        }
        //Particle constructor
        function point() {
            this.x = Math.random() * (canvas.width + maxDist) - (maxDist / 2);
            this.y = Math.random() * (canvas.height + maxDist) - (maxDist / 2);
            this.z = (Math.random() * 0.5) + 0.5;
            this.vx = ((Math.random() * 2) - 0.5) * this.z;
            this.vy = ((Math.random() * 1.5) + 1.5) * this.z;
            this.fill = "rgba(255,255,255," + ((0.4 * Math.random()) + 0.5) + ")";
            this.dia = ((Math.random() * 2.5) + 1.5) * this.z;
            points.push(this);
        }
        //Point generator
        function generatePoints(amount) {
            var temp;
            for (var i = 0; i < amount; i++) {
                temp = new point();
            };
            // console.log(points);
        }
        //Point drawer
        function draw(obj) {
            ctx.beginPath();
            ctx.strokeStyle = "transparent";
            ctx.fillStyle = obj.fill;
            ctx.arc(obj.x, obj.y, obj.dia, 0, 2 * Math.PI);
            ctx.closePath();
            ctx.stroke();
            ctx.fill();
        }
        //Updates point position values
        function update(obj) {
            obj.x += obj.vx;
            obj.y += obj.vy;
            if (obj.x > canvas.width + (maxDist / 2)) {
                obj.x = -(maxDist / 2);
            }
            else if (obj.xpos < -(maxDist / 2)) {
                obj.x = canvas.width + (maxDist / 2);
            }
            if (obj.y > canvas.height + (maxDist / 2)) {
                obj.y = -(maxDist / 2);
            }
            else if (obj.y < -(maxDist / 2)) {
                obj.y = canvas.height + (maxDist / 2);
            }
        }
        //
        function pointFun() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (var i = 0; i < points.length; i++) {
                draw(points[i]);
                update(points[i]);
            };
        }
    
        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            points = [];
            generatePoints(window.innerWidth / 3);
            pointFun();
        }
    
        //Execute when DOM has loaded
        document.addEventListener('DOMContentLoaded', init, false);
    })();
    </script>
    <!-- ส่วนที่ 3 -->

</body>
</html>
<style>
        /* ส่วนที่ 1 */
      
        .snow {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom:0;
            z-index: 2;
            pointer-events: none;
        }
        /* ส่วนที่ 1 */


        /** ไม่เกี่ยว */
        .candycane-border{ 
            --border: 20; /*only px value */
            --borderW: calc(var(--border) * 1px);
            border: var(--borderW) solid red; /*fallback*/
            border-image-width: var(--borderW);
            border-image:  
                repeating-linear-gradient(
                -45deg, 
                green 0 calc(var(--borderW) * .5), 
                white 0 calc(var(--borderW) * 1),
                red 0 calc(var(--borderW) * 1.5), 
                white 0 calc(var(--borderW) * 2)
                ) var(--border);
            position: relative;
        }
        .candycane-border::after{
            content: '';
            position: absolute;
            left: calc(var(--borderW) * -1);
            top: calc(var(--borderW) * -1);
            width: 100%;
            height: 100%;
            border: var(--borderW) double rgba(255,255,255,0.5);
        }
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
