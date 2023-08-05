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
  <title>Olivia Rodrigo</title>
  <link rel="shortcut icon" type="x-icon" href="pic/icon1.png"> 
  <link rel="stylesheet" href="artist.css">
</head>
<body>
  <div class="container">
    <img src="pic/MELOMIX-1 (6).png" class="logo">
    <div class="profile">
      <img src="pic/olivia.jpeg" >
      <h1>Olivia Rodrigo</h1>
      <p class="genre">Genres: Pop, pop rock</p>
      <p class="description">Olivia Isabel Rodrigo is an American singer-songwriter and actress.
         She gained recognition in the late 2010s with her lead roles on the Disney television programs High School Musical: The Musical.
         Rodrigo released her debut single "Drivers License", which broke various records and became one of the best-selling songs of 2021. 
         She followed it up with singles "Deja Vu" and "Good 4 U", and released her debut solo studio album, Sour (2021)</p>
    </div>
    <div class="music">
      <h2>Music</h2>
    
        <table>
            <td>  
            <div class="imgbox">
                <img src="pic/good4u.jpg"></td>
            <td>
                <div class="title">Good 4 U</div>
            </td>
            <td>
                <audio controls>
                  <source src="song/Olivia Rodrigo - good 4 u.mp3" type="audio/mp3">
                </audio>
            </td>
        </table>

        <table>
          <td>   
          <div class="imgbox">
              <img src="pic/sour.png"></td>
          <td>
              <div class="title">Brutal</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Olivia Rodrigo - brutal.mp3" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td> 
          <div class="imgbox">
              <img src="pic/favcrime.jpg"></td>
          <td>
              <div class="title">Favourite crime</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Olivia Rodrigo - favorite crime.mp3" type="audio/mp3">
              </audio>
          </td>
         </table>

        <table>
          <td>
          <div class="imgbox">
              <img src="pic/prom.jpg"></td>
          <td>
              <div class="title">Driver's License</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Olivia Rodrigo - drivers license.mp3" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td>
              
          <div class="imgbox">
              <img src="pic/dejavu.jpg"></td>
          <td>
              <div class="title">Deja Vu</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Olivia Rodrigo - deja vu.mp3" type="audio/mp3">
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
