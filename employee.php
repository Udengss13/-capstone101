<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Employee Login</title>
      <link rel="icon" href="asset/logopet.png" type="image/x-icon">
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/emp.css">
   </head>
   <body>
    <h1>Welcome Veterinarians!</h1>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="#" class="login">
                  <div class="field">
                     <input type="text" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>


               <form action="empreg-process.php" class="signup" method="post">
                  <div class="field">                   
                     <input type="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">                   
                     <input type="text" placeholder="Employee ID" required>
                  </div>
                  <div class="field">                   
                     <input type="text" placeholder="Employee Name" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  
                  <div class="field">
                     <input type="password" placeholder="Confirm password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>