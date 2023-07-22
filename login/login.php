
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
            <form action="#">
               <div class="inbox">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                 <input type="email">
                 <label>Email</label>
               </div>
               <div class="inbox">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                 <input type="password">
                 <label>Password</label>
               </div>
              <div class="remember">
                 <label><input type="checkbox">Remember me</label>
              </div>
              <button type="submit" class="btn">Login</button>
             <div class="login-register">
                  <p>Dont have an account?<a href="#" class="register-link">Register</a></p>
              </div>  
            </form> 
         </div>

         <div class="ss-box register">
          <h2>Registration</h2>
          <form action="#">
             <div class="inbox">
             <span class="icon"> <ion-icon name="person"></ion-icon> </span>             
             <input type="text">
               <label>Username</label>
             </div>
             <div class="inbox">
              <span class="icon"><ion-icon name="mail"></ion-icon></span>
               <input type="email">
               <label>Email</label>
             </div>
             <div class="inbox">
              <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
               <input type="password">
               <label>Password</label>
             </div>
            <div class="remember-forgot">
               <label><input type="checkbox">I agree to the terms & conditions</label>
            </div>
            <button type="submit" class="btn">Register</button>
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