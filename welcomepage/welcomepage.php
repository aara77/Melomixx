<?php
  include'C:\xampp\htdocs\Melomixx\login\connect.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="icon1.png"><!--icon code-->
    <title>MELOMIX</title>
    <link rel="stylesheet" href="welcomepage.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"/>
    

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body>
    <section id="banner">
        <img src="MELOMIX-1 (6).png" class="logo">
        <div class="banner-text">
            <h1>MELOMIX</h1>
            <p>Vibe With Us</p>
            <div class="banner-button">
                <a href="/Melomixx/login/login.php"><span></span>LOGIN</a>
                <a href="/login/login.html"><span></span>LISTEN NOW</a>
            </div>
        </div>
    </section>
<!-- ------------------------------------------------- -->
<!--start of nav bar-->
    <div id="SideNav">
        <nav>
            <ul>
                <li><a href="/Melomixx/HOMEPAGE/homepage.php">HOME</a></li>
                <li><a href="/Melomixx/Aboutus/aboutus.php">ABOUT US</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="logout.php">LOG OUT</a></li>
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

<!--Features-->
    <section id="features">
    <div class="title-text">
    <p>FEATURES</p>
    <h1>Why MELOMIX</h1>
    </div>
    <div class="features-box">
        <div class="feature">
            <h1>Music</h1>
            <div class="feature-dis">
                <div class="feature-icon">
                    <i class="fa fa-music"></i>
                </div>
                <div class="feature-text">
                    <p> Songs,Albums, and genres related to your musical preferance</p>
                </div>
            </div>

            <h1>Learn More</h1>
            <div class="feature-dis">
                <div class="feature-icon">
                    <i class="fa fa-info-circle"></i>
                </div>
                <div class="feature-text">
                    <p> Learn more information about your favourite Artists and get to know about new Artists and their songs </p>
                </div>
            </div>
            
            <h1>Genres</h1>
            <div class="feature-dis">
                <div class="feature-icon">
                    <i class="fa fa-play"></i>
                </div>
                <div class="feature-text">
                    <p>With different genres of song enjoy listening at MELOMIX</p>
                </div>
            </div>

        </div>
        <div class="feature-img">
            <img src="songs.jpg" >
        </div>
    </div>
    </section>
<!-- ------------------------------------------------- -->

<!--contact-->
      <section class="contact">
        <div class="titletext">
        <p>CONTACT</p>
        <h1>find us in</h1>
        </div>
        <div class="featuresbox">
            <div class="cont">
                <h1>Aarati Rai</h1>
                <div class="feature-dis">
                    <div class="feature-text">
                        <p><B><i><u>GIT: </u></i></B>aarati </p>
                        <p><B><i><u>Email: </u></i></B>aarati.211402@ncit.edu.np </p>
                    </div>
                </div>
    
                <h1>Shreya Shrestha</h1>
                <div class="feature-dis">
                
                    <div class="feature-text">
                        <p><B><i><u>GIT:</u></i></B>shreyasstha</p>
                        <p><B><i><u>Email:</u></i></B>shreya.211438@ncit.edu.np</p>
                    </div>
                </div>
                
                <h1>Special guest </h1>
                <div class="feature-dis">
                    <div class="feature-text">
                        <p><h3>Sunil Nath Yogi</h3></p>
                        <p><B><i><u>GIT:</u></i></B>sunilyogi333</p>
                        <p><B><i><u>Email:</u></i></B>sunil.2114</p>
                        <br>
                        <p><h3>Nabina Upadhyaha</h3></p>
                        <p><B><i><u>GIT: </u></i></B>nabs</p>
                        <p><B><i><u>Email: </u></i></B>nabina.211420@ncit.edu.np</p>
                    </div>
                </div>
    
            </div>
        </div>
        </section>  
<!-- ------------------------------------------------- -->

</body>
</html>