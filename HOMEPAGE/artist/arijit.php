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
  <title>Arijit Singh</title>
  <link rel="shortcut icon" type="x-icon" href="pic/icon1.png"> 
  <link rel="stylesheet" href="artist.css">
</head>
<body>
  <div class="container">
    <img src="pic/MELOMIX-1 (6).png" class="logo">
    <div class="profile">
      <img src="pic/as.webp" >
      <h1>Arijit Singh</h1>
      <p class="genre">Genres: Indian Film Pop, Indian Indie, pop</p>
      <p class="description">Arijit Singh is an Indian playback singer and music composer.
         The recipient of several accolades including a National Film Award and seven Filmfare Awards,
          he has recorded songs in several Indian languages.</p>
    </div>
    <div class="music">
      <h2>Music</h2>
    
        <table>
            <td>  
            <div class="imgbox">
                <img src="pic/tere hawale.jpg"></td>
            <td>
                <div class="title">Tere Hawalea</div>
            </td>
            <td>
                <audio controls>
                  <source src="song/Arijit Singh-tere hawaale.m4a" type="audio/mp3">
                </audio>
            </td>
        </table>

        <table>
          <td>   
          <div class="imgbox">
              <img src="pic/arijit.jpg"></td>
          <td>
              <div class="title">Love Me Thoda</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Arijit Singh- love me thoda.m4a" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td> 
          <div class="imgbox">
              <img src="pic/shayad.jpg"></td>
          <td>
              <div class="title">Shayad</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Arijit Singh-shayad.mp3" type="audio/mp3">
              </audio>
          </td>
         </table>

        <table>
          <td>
          <div class="imgbox">
              <img src="pic/hamdard.jpeg"></td>
          <td>
              <div class="title">Hamdard</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Arijit Singh-hamdard.m4a" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td>
              
          <div class="imgbox">
              <img src="pic/phir.jpg"></td>
          <td>
              <div class="title">Phir Kabhi</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Arijit Singh-phir kabhi.m4a" type="audio/mp3">
              </audio>
          </td>
        </table>
    </div>
  </div>
  <script src="artist.js"></script>
  <!-- side meanu bar--> 
  <div id="SideNav">
    <nav>
        <ul>
            <li><a href="/Melomixx/welcomepage/welcomepage.php">HOME</a></li>
            <li><a href="/Melomixx/Aboutus/aboutus.html">ABOUT US</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="/Melomixx/login/login.php">LOG OUT</a></li>
        </ul>
    </nav>
</div>
<div id="menuBtn">
    <img src="pic/menu.png" id="menu">
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