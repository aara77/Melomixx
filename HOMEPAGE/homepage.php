<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="shortcut icon" type="x-icon" href="images/icon1.png"><!--icon code-->
    <script src="https://kit.fontawesome.com/6fa3aabdb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="homepage.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">

</head>
<body>
    <!-- side meanu bar--> 
    <div id="SideNav">
        <nav>
            <ul>
                <li><a href="/HOMEPAGE/homepage.html">HOME</a></li>
                <li><a href="/Aboutus/aboutus.html">ABOUT US</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">LOG OUT</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="images/menu.png" id="menu">
    </div>
    <script>
        var menuBtn= document.getElementById("menuBtn")
        var SideNav= document.getElementById("SideNav")
        var menu= document.getElementById("menu")

        SideNav.style.right="-250px";
 
        menuBtn.onclick = function(){
            if(SideNav.style.right=="-250px"){
                SideNav.style.right= "0";
                menu.src = "images/close.png";
            }
            else{
                SideNav.style.right = "-250px";
                menu.src = "images/menu.png";
            }
        }
    </script> 
    <!--end of nav bar-->
<!-- ------------------------------------------------- -->
<!--slider-->

<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 5</div>
      <img src="images/slideshowts.png" style="width:100%">
      <div class="text"></div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img src="images\slideshowYN.png" style="width:100%">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="images/slideshowbts.png" style="width:100%">
        <div class="text"></div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">4 / 5</div>
      <img src="images/slideshow1d.png" style="width:100%">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="images/slideshowbts.png" style="width:100%">
        <div class="text"></div>
      </div>
      
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span>
      <span class="dot"></span> 
      <span class="dot"></span>
    </div>

<!--end of slider-->
<!------------------------------------------------------------------------------------>
<!--body-->
<h2>NEW RELEASE</h2>
<p>Use the horizontal scrollbar to see the other images.</p>
<div class="scroll-container">
    <a href="https://youtu.be/QU9c0053UAU" target="_blank">
        <img src="images/jk7.jpg" alt="Cinque Terre" width="300" height="300">
    </a>
    <a href="https://youtu.be/RlPNh_PBZb4 " target="_blank"> 
      <img src="images/Olivia_Rodrigo_-_Vampire.png" alt="Forest" width="300" height="300">
    </a> 
    <a href="https://youtu.be/cW8VLC9nnTo" target="_blank">
        <img src="images/bellie.jpg" alt="Northern Lights" width="300" height="300">
    </a>
     <a href="https://youtu.be/CUj2AWEJnwQ" target="_blank">
        <img src="images/nikibarbie.jpg" alt="Northern Lights" width="300" height="300">
    </a>
    <a href="https://youtu.be/OiC1rgCPmUQ" target="_blank"> 
        <img src="images/dua.jpg" alt="Mountains" width="300" height="300">
    </a>
    <a href="https://youtu.be/fuzLp9gDcwY" target="_blank"> 
        <img src="images/the_rose_back_to_me.jpg" alt="Forest" width="300" height="300">
    </a>
</div>
    
<h2>Famous OSTs</h2>
<p>Use the horizontal scrollbar to see the other images.</p>
<div class="scroll-container">
    <a href="https://youtu.be/-pHfPJGatgE" target="_blank">
        <img src="images/YourName.jpg" alt="Cinque Terre" width="300" height="300">
    </a>
    <a href="https://youtu.be/qal34e9v_pk" target="_blank"> 
      <img src="images/suzume.jpg" alt="Forest" width="300" height="300">
    </a> 
    <a href="https://youtu.be/cPAbx5kgCJo" target="_blank">
        <img src="images/moana.jpg" alt="Northern Lights" width="300" height="300">
    </a>
    <a href="https://youtu.be/L0MK7qz13bU" target="_blank"> 
        <img src="images/elsa.jpg" alt="Mountains" width="300" height="300">
    </a>
    <a href="https://youtu.be/1mBLqw8thGA" target="_blank"> 
        <img src="images/untamed.jpg" alt="Forest" width="300" height="300">
    </a> 
    <a href="https://youtu.be/wdHeiVf0mds" target="_blank">
        <img src="images/goblin.jpg" alt="Northern Lights" width="300" height="300">
    </a>
    <a href="https://youtu.be/GUV50QDDR-M" target="_blank"> 
        <img src="images/alovesobeautiful.jpg" alt="Mountains" width="300" height="300">
    </a>
    <a href="https://youtu.be/DQ4r7HegRQw" target="_blank"> 
        <img src="images/thenightwemet.jpg" alt="Forest" width="300" height="300">
    </a> 
    <a href="https://youtu.be/CUj2AWEJnwQ" target="_blank">
        <img src="images/nikibarbie.jpg" alt="Northern Lights" width="300" height="300">
    </a>
    <a href="https://youtu.be/8wyplphNds0" target="_blank" > 
        <img src="images/XLm7O_3m.jpg" alt="Mountains" width="300" height="300">
    </a>            
      
</div>
<!--New Release--
<h2>NEW RELEASE</h2>
<div class="image-scroll-container1">
    <a class="scroll-link1" href="#link1">
        <img src="images/YpurName2.jpg" alt="Image 1">
    </a>
    <a class="scroll-link1" href="#link2">
        <img src="images/YpurName2.jpg" alt="Image 2">
    </a>
    <a class="scroll-link1" href="#link2">
        <img src="images/YpurName2.jpg" alt="Image 2">
    </a>
    <a class="scroll-link1" href="#link2">
        <img src="images/YpurName2.jpg" alt="Image 2">
    </a>
    <a class="scroll-link1" href="#link2">
        <img src="images/YpurName2.jpg" alt="Image 2">
    </a>
    <a class="scroll-link1" href="#link2">
        <img src="images/YpurName2.jpg" alt="Image 2">
    </a>
    <a class="scroll-link1" href="#link2">
        <img src="images/YpurName2.jpg" alt="Image 2">
    </a>


    
    <!-- Add more images and links as needed -->
</div>

<!--End of New Release-->

<!--ost--
<h2>Famous osts</h2>
<div class="image-scroll-container2">
    <a class="scroll-link2" href="https://youtu.be/-pHfPJGatgE">
        <img src="images/YpurName2.jpg" alt="Image 1">
    </a>
    <a class="scroll-link2" href="https://youtu.be/GUV50QDDR-M">
        <img src="images/alovesobeautiful.jpg" alt="Image 2">
    </a>
    <a class="scroll-link2" href="https://youtu.be/qal34e9v_pk">
        <img src="images/suzume.jpg" alt="Image 2">
    </a>
    <a class="scroll-link2" href="https://youtu.be/cPAbx5kgCJo">
        <img src="images/moana.jpg" alt="Image 2">
    </a>
    <a class="scroll-link2" href="https://youtu.be/CUj2AWEJnwQ">
        <img src="images/nikibarbie.jpg" alt="Image 2">
    </a>
    <a class="scroll-link2" href="https://youtu.be/wdHeiVf0mds">
        <img src="images/goblin.jpg" alt="Image 2">
    </a>
    <a class="scroll-link2" href="https://youtu.be/qal34e9v_pk">
        <img src="images/suzume.jpg" alt="Image 2">
    </a>
</div>

<!--end of ost-->
<!--Artists-->
<section class="artist" id="artist">
    <h1 class="heading">The Artists</h1>
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/conan2.jpg" alt="">
                <div class="share">
                    <a href="https://open.spotify.com/artist/4Uc8Dsxct0oMqx0P6i60ea" target="_blank" class="fa-brands fa-spotify"></a>
                    <a href="https://twitter.com/conangray?lang=en" target="_blank" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/conangray/?hl=en" target="_blank" class="fab fa-instagram"></a>
                    <a href="#" class="fa-solid fa-music"></a>

                </div>
            </div>
            <div class="content">
                <h5>American singer-songwriter</h5>
                <h3>Conan Gray</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/ts1.png" alt="">
                <div class="share">
                    <a href="https://open.spotify.com/artist/06HL4z0CvFAxyc27GXpf02" target="_blank" class="fab fa-spotify"></a>
                    <a href="https://twitter.com/taylorswift13?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/taylorswift/?hl=en" target="_blank" class="fab fa-instagram"></a>
                    <a href="#" class="fa-solid fa-music"></a>

                </div>
            </div>
            <div class="content">
                <h5>American singer-songwrite</h5>
                <h3>Taylor Swift</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arjit.jpg" alt="">
                <div class="share">
                    <a href="https://open.spotify.com/artist/4YRxDV8wJFPHPTeXepOstw" target="_blank" class="fab fa-spotify"></a>
                    <a href="https://twitter.com/arijitsingh?lang=en" target="_blank" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/arijitsingh/?hl=en" target="_blank" class="fab fa-instagram"></a>
                    <a href="#" class="fa-solid fa-music"></a>

                </div>
            </div>
            <div class="content">
                <h5>Indian playback singer</h5>
                <h3>Arijit Singh</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/bts2.jpg" alt="">
                <div class="share">
                    <a href="https://open.spotify.com/artist/3Nrfpe0tUJi4K4DXYWgMUX" target="_blank" class="fab fa-spotify"></a>
                    <a href="https://twitter.com/BTS_twt" target="_blank" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/bts.bighitofficial/?hl=en" target="_blank" class="fab fa-instagram"></a>
                    <a href="#" class="fa-solid fa-music"></a>

                   
                </div>
            </div>
            <div class="content">
                <h5>Boy Band</h5>
                <h3>BTS</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/iu.jpg" alt="">
                <div class="share">
                    <a href="https://open.spotify.com/artist/3HqSLMAZ3g3d5poNaI7GOU" target="_blank" class="fab fa-spotify"></a>
                    <a href="https://twitter.com/_IUofficial" target="_blank" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/dlwlrma/?hl=en" target="_blank" class="fab fa-instagram"></a>
                    <a href="#" class="fa-solid fa-music"></a>

                </div>
            </div>
            <div class="content">
                <h5>South Korean singer-songwriter</h5>
                <h3>IU</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/sajjan.jpg" alt="">
                <div class="share">
                    <a href="https://open.spotify.com/artist/1deQzOQwArAsUgm2WdjtyI" target="_blank" class="fab fa-spotify"></a>
                    <a href="https://twitter.com/SajjanRajVaidya?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/sajjanrajvaidya/?hl=en" target="_blank" class="fab fa-instagram"></a>
                    <a href="#" class="fa-solid fa-music"></a>

                </div>
            </div>
            <div class="content">
                <h5>Vocalizer</h5>
                <h3><b>Sajjan Raj Vaidya</b></h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/olivia.jpg" alt="">
                <div class="share">
                    <a href="https://open.spotify.com/artist/1McMsnEElThX1knmY4oliG" target="_blank" class="fab fa-spotify"></a>
                    <a href="https://twitter.com/oliviarodrigo?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/oliviarodrigo/" class="fab fa-instagram" target="_blank" class="fab fa-instagram"></a>
                    <a href="#" class="fa-solid fa-music"></a>

                </div>
            </div>
            <div class="content">
                <h5>American singer-songwriter</h5>
                <h3>Olivia Rodrigo</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/sushant.jpg" alt="">
                <div class="share">
                    <a href="https://open.spotify.com/artist/5R5EUMWsrYDt3ItavrP6C5" target="_blank" class="fa-brands fa-spotify"></a>
                    <a href="https://twitter.com/sushantkc9?lang=en" target="_blank" class="fab fa-twitter"></a>
                    <a href="https://www.instagram.com/sushantkcofficial/reels/?hl=en" target="_blank" class="fab fa-instagram"></a>
                    <a href="#" class="fa-solid fa-music"></a>
                </div>
            </div>
            <div class="content">
                <h5>Singer</h5>
                <h3>Sushant KC</h3>
            </div>
        </div>

    </div>
</section>
<!-- end of Artists-->

<!--end of body-->
<!--footer
<footer>
    <div class="row">
        <div class="col">
            <img src="images/MELOMIX-1 (6).png" class="logo">
            <p>enjoy music in our website</p>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
</footer>
-->


<script src="homepage.js"></script>
</body>
</html>