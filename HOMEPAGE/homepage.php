<?php
  include'C:\xampp\htdocs\Melomixx\login\connect.php';
  session_start();
  if(!isset($_SESSION['login'])|| $_SESSION['login']!= true){
    header('location:/Melomixx/login/login.php');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="shortcut icon" type="x-icon" href="icon1.png"><!--icon code-->
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <!-- side meanu bar--> 
    <div id="SideNav">
        <nav>
            <ul>
                <li><a href="/Melomixx/HOMEPAGE/homepage.php">HOME</a></li>
                <li><a href="/Melomixx/Aboutus/aboutus.php">ABOUT US</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="\Melomixx\welcomepage\logout.php">LOG OUT</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="menu.png" id="menu">
    </div>
    <script>
        var menuBtn= document.getElementById("menuBtn")
        var SideNav= document.getElementById("SideNav")
        var menu= document.getElementById("menu")

        SideNav.style.right="-250px";
 
        menuBtn.onclick = function(){
            if(SideNav.style.right=="-250px"){
                SideNav.style.right= "0";
                menu.src = "close.png";
            }
            else{
                SideNav.style.right = "-250px";
                menu.src = "menu.png";
            }
        }
    </script> 
    <!--end of nav bar-->
<!-- ------------------------------------------------- -->
<!--slider-->
    <section class="section">
        <div class="slider">
            <div class="slide">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <div class="st first">
                    <img src="conan2.jpg" alt="">
                </div>

                <div class="st">
                    <img src="jhari.jpg" alt="">
                </div>

                <div class="st">
                    <img src="1d1.jpg" alt="">
                </div>

                <div class="st">
                    <img src="calmdown.jpg" alt="">
                </div>

                <div class="nav-auto">
                    <div class="a-b1"></div>
                    <div class="a-b2"></div>
                    <div class="a-b3"></div>
                    <div class="a-b4"></div>
                </div>
            </div>

            <div class="nav-m">
                <label for="radio1" class="m-btn"></label>
                <label for="radio1" class="m-btn"></label>
                <label for="radio1" class="m-btn"></label>
                <label for="radio1" class="m-btn"></label>
            </div>
        </div>
    </section>
    <script type="text/javascript">
    var counnter=1;
    setInterval(function(){
        document.getElementById?('radio' + counter).checked=true;
        counter++;
        if(counter > 5){
            counter = 1;
        }
    },5000);
    </script>
</body>
</html>