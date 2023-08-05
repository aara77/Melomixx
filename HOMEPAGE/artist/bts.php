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
  <title>BTS</title>
  <link rel="shortcut icon" type="x-icon" href="pic/icon1.png"> 
  <link rel="stylesheet" href="artist.css">
</head>
<body>
  <div class="container">
    <img src="pic/MELOMIX-1 (6).png" class="logo">
    <div class="profile">
      <img src="pic/BTS Spotify picture.jpeg" >
      <h1>BTS</h1>
      <p class="genre">Genres: K-pop, pop, hiphop, R&B</p>
      <p class="description">
        BTS, also known as the Bangtan Boys, is a South Korean band formed in 2010.
         The band consists of Jin, Suga, J-Hope, RM, Jimin, V, and Jungkook, 
         who co-write or co-produce their own material.
         BTS debuted in 2013 under Big Hit Entertainment with the single album 2 Cool 4 Skool.
         As of 2023,BTS is the best-selling artist in South Korean history according to the Circle Chart,
          having sold in excess of 40 million albums.</p>
    </div>
    <div class="music">
      <h2>Music</h2>
    
        <table>
            <td>  
            <div class="imgbox">
                <img src="pic/butter.png"></td>
            <td>
                <div class="title">Butter</div>
            </td>
            <td>
                <audio controls>
                  <source src="song/bts-butter.mp3" type="audio/mp3">
                </audio>
            </td>
        </table>

        <table>
          <td>   
          <div class="imgbox">
              <img src="pic/ptd.png"></td>
          <td>
              <div class="title">Permission To Dance</div>
          </td>
          <td>
              <audio controls>
                <source src="song/bts-ptd.mp3" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td> 
          <div class="imgbox">
              <img src="pic/dyanamite.png"></td>
          <td>
              <div class="title">Dynamite </div>
          </td>
          <td>
              <audio controls>
                <source src="song/bts-dynamite.mp3" type="audio/mp3">
              </audio>
          </td>
         </table>

        <table>
          <td>
          <div class="imgbox">
              <img src="pic/mic drop.jpg"></td>
          <td>
              <div class="title">Mic Drop</div>
          </td>
          <td>
              <audio controls>
                <source src="song/bts-mic drop.mp3" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td>
              
          <div class="imgbox">
              <img src="pic/BTS_-_Make_It_Right.png"></td>
          <td>
              <div class="title">Make It Right</div>
          </td>
          <td>
              <audio controls>
                <source src="song/bts-make it right.mp3" type="audio/mp3">
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
            <li><a href="#">ABOUT US</a></li>
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
