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
  <title>Conan Gray</title>
  <link rel="shortcut icon" type="x-icon" href="pic/icon1.png"> 
  <link rel="stylesheet" href="artist.css">
</head>
<body>
  <div class="container">
    
    <img src="pic/MELOMIX-1 (6).png" class="logo">
    <div class="profile">
      <img src="pic/conan.jpg" >
      <h1>Conan Gray</h1>
      <p class="genre">Genre: Pop music, Indie pop, Lo-fi, Acoustic music, acoustic pop, Pop</p>
      <p class="description">
        Conan Lee Gray is an American singer and songwriter. Born in Lemon Grove, California, and raised in Georgetown, Texas, he began uploading vlogs, covers and original songs to YouTube as a teenager. 
        In 2018, Gray signed a record deal with Republic Records, which released his debut EP, Sunset Season</p>
    </div>
    <div class="music">
      <h2>Music</h2>
    
        <table>
            <td>  
            <div class="imgbox">
                <img src="pic/heather.jpeg"></td>
            <td>
                <div class="title">Heather</div>
            </td>
            <td>
                <audio controls>
                  <source src="song/Conan Gray - Heather.mp3" type="audio/mp3">
                </audio>
            </td>
        </table>

        <table>
          <td>   
          <div class="imgbox">
              <img src="pic/astronomy.jpeg"></td>
          <td>
              <div class="title">Astronomy</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Conan Gray - Astronomy.mp3" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td> 
          <div class="imgbox">
              <img src="pic/the story.jpg"></td>
          <td>
              <div class="title">The Story</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Conan Gray - The Story).m4a" type="audio/mp3">
              </audio>
          </td>
         </table>

        <table>
          <td>
          <div class="imgbox">
              <img src="pic/memoriea.jpeg"></td>
          <td>
              <div class="title">Memories</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Conan Gray - Memories.mp3" type="audio/mp3">
              </audio>
          </td>
        </table>

        <table>
          <td>
              
          <div class="imgbox">
              <img src="pic/the cut.jpeg"></td>
          <td>
              <div class="title">The Cut That Always Bleeds</div>
          </td>
          <td>
              <audio controls>
                <source src="song/Conan Gray - The Cut That Always Bleeds.mp3" type="audio/mp3">
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
