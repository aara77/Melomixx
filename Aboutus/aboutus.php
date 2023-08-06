<?php
  include'connect.php';
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
    <title>ABOUT US</title>
    <link rel="shortcut icon" type="x-icon" href="icon1.png"><!--icon code-->
    <link rel="stylesheet" href="aboutus.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body>
    <section class="about">
        <div class="heading">
            <h1>About Us</h1>
        </div>
        <div class="paragraph">
                <p><h1>Welcome to Melomix!</h1></p>
               <p> At Melomix, we are all about celebrating the beauty and power of music. 
                Our passion for melodies, rhythms, and harmonies drives us to create a platform that connects music enthusiasts from all walks of life.
                 Whether you're an avid music lover, an aspiring artist, or a seasoned musician, we've got something special for you.</p><br>
                <p><h1>Our Mission</h1></p>
                   <p>Our mission is to bring the magic of music into the lives of people worldwide.
                     We believe that music is a universal language that transcends boundaries and unites us all. Through our platform, we aim to:
                     <ol>  
                        <li>To help users discover new artists, albums, and genres related to their musical preferences.</li>
                        <li>To create user-friendly and accessible platform.</li>
                        <li>To make music more accessible and enjoyable.</li>
                        <li>To create an opportunity that one can explore in the music industry.</li>
                        <li>To design visually appealing and easy to navigate music player.</li>
                     </ol>
                    </p><br>
                    <p><h1>Our Vision</h1></p>
                    <p>We envision a world where music brings people together, evokes emotions, and sparks creativity. 
                       Through our platform, we aim to spread the magic of music to every corner of the globe.
                    </p><br>
                    <p><h1>Join Us</h1></p>
                    <p>Come, join our community of music enthusiasts, and let's embark on a melodious adventure together. 
                        Tune in, explore, and let the music uplift your soul.
                        Thank you for being a part of Melomix. Let's harmonize our love for music and make every beat count.
                    </p><br>
                        <p><h1>About us</h1></p>
        </div>
            
            <div class="content">
                <div class="box">
                    <img src="Buttercup-pic.webp">
                    <h3><br><br>Aarati Rai</h3>
                    <h5>211402</h5>
                    <div class="icons">
                       <a href="https://www.instagram.com/yeoubii__/"> <ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                </div>
               <div class="box">
                    <img src="blossom.webp">
                    <h3>Shreya Shrestha</h3>
                    <h5>211438</h5>
                    <div class="icons">
                        <a href="https://www.instagram.com/shreya.sstha/"> <ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                </div>
            </div>
    </section>
   
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <!-- side meanu bar--> 
    <div id="SideNav">
        <nav>
            <ul>
                <li><a href="/Melomixx/welcomepage/welcomepage.php">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="/Melomixx/login/login.php">LOG OUT</a></li>
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
</body>
</html>