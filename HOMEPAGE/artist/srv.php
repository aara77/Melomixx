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
  <title>Sajjan Raj Vaidya</title>
  <link rel="shortcut icon" type="x-icon" href="pic/icon1.png"> 
  <link rel="stylesheet" href="artist.css">
</head>
<body>
  <div class="container">
    
    <img src="pic/MELOMIX-1 (6).png" class="logo">
    <div class="profile">
      <img src="pic/unnamed.jpg" >
      <h1>Sajjan Raj Vaidya</h1>
      <p class="genre">Genre: Indian Indie</p>
      <p class="description">
        Sajjan Raj Vaidya is a Nepali singer, songwriter, guitarist and producer based in New York City.
         His music is a symphony of expressive vocals, intricate metaphors and 
         anomalous song structures arriving at the crescendo as a complete musical journey.</p>
    </div>
    <div class="music">
      <h2>Music</h2>
    
        <table>
            <td>  
            <div class="imgbox">
                <img src="pic/chithi.jpeg"></td>
            <td>
                <div class="title">Chitthi Bhitra</div>
            </td>
            <td>
                <audio controls>
                  <source src="song/Sajjan Raj Vaidya - Chitthi Bhitra.m4a" type="audio/mp3">
                </audio>
            </td>
        </table>

        <table>
          <td>   
          <div class="imgbox">
              <img src="pic/sastomutu.jpeg"></td>
          <td>
              <div class="title">Sasto Mutu</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Sajjan Raj Vaidya - Sasto Mutu.mp3" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td> 
          <div class="imgbox">
              <img src="pic/hataarindai.jpg"></td>
          <td>
              <div class="title">Hataarindai Bataasindai </div>
          </td>
          <td>
              <audio controls>
                <source src="song/Sajjan Raj Vaidya - Hataarindai_ Bataasindai.m4a" type="audio/mp3">
              </audio>
          </td>
         </table>

        <table>
          <td>
          <div class="imgbox">
              <img src="pic/naganya maya.jpeg"></td>
          <td>
              <div class="title">Naganya Maya</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Sajjan Raj Vaidya - Naganya Maya.mp3" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td>
              
          <div class="imgbox">
              <img src="pic/dhairya.jpeg"></td>
          <td>
              <div class="title">Dhairya</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Sajjan Raj Vaidya - Dhairya.m4a" type="audio/mp3">
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
