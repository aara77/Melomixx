<?php
include 'connect.php';
if (isset($_POST['rsubmit'])){
  $rusername=$_POST['rusername'];
  $remail=$_POST['remail'];
  $rpassword=$_POST['rpassword'];

  $sql = " INSERT INTO registered_data(username,email,password)
  VALUES ('$rusername','$remail','$rpassword')
  ";
  $rresult = mysqli_query($conn,$sql);
  if(!$result){
    echo "data insertion problem";
  }
}
if (isset($_POST['lsubmit'])){

  $lemail=$_POST['lemail'];
  $lpassword=$_POST['lpassword'];

  $sql= "SELECT * FROM registered_data where email='$lemail' AND password='$lpassword'";
  $lresult= mysqli_query($conn,$sql);
  $num=mysqli_num_rows($lresult);

  if($num==1){
    session_start();
    $_SESSION['login']=true;
    header('location:\Melomixx\HOMEPAGE\homepage.php');
  
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login in</title>
    <link rel="shortcut icon" type="x-icon" href="icon1.png"><!--icon code-->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="ss">
            <h1>MELOMIX</h1>
    <div class="wrapper">      
         <div class="ss-box ">
            <h2>Login</h2>
          <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
               <div class="inbox">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                 <input type="email" name="lemail">
                 <label>Email</label>
               </div>
               <div class="inbox">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                 <input type="password" name="lpassword">
                 <label>Password</label>
               </div>
              <div class="remember">
                 <label><input type="checkbox">Remember me</label>
              </div>
              <input type="submit" name="lsubmit" class="btn" value="Login">
             <div class="login-register">
                  <p>Dont have an account?<a href="#" class="register-link">Register</a></p>
              </div>  
            </form> 
         </div>

         <div class="ss-box register">
          <h2>Registration</h2>
          <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
             <div class="inbox">
             <span class="icon"> <ion-icon name="person"></ion-icon> </span>             
             <input type="text" name="rusername">
               <label>Username</label>
             </div>
             <div class="inbox">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
               <input type="email" name="remail">
               <label>Email</label>
             </div>
             <div class="inbox">
              <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
               <input type="password" name="rpassword">
               <label>Password</label>
             </div>
            <div class="remember-forgot">
               <label><input type="checkbox">I agree to the terms & conditions</label>
            </div>
            <input type="submit" name="rsubmit" class="btn" value="Register">
           <div class="login-register">
                <p>Already have an account?<a href="#" class="login-link">Login</a></p>
            </div>  
          </form> 
       </div>
      </div>
      <script src="login.js"></script>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </div>
   
</body>
</html>