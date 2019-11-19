<!DOCTYPE html>
<html lang="en">

<head>
   <title>Otakstudio Login </title>
   <!-- Meta tags -->
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="keywords" content="Gaze Sign up & login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
   <script>
      addEventListener("load", function() {
         setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
         window.scrollTo(0, 1);
      }
   </script>
   <!-- Meta tags -->
   <!--stylesheets-->
   <link href="<?=base_url('')?>/web/css/style.css" rel='stylesheet' type='text/css' media="all">
   <!--//style sheet end here-->
   <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
</head>

<body>
   <div class="mid-class">
      <div class="art-right-w3ls">
         <h2>Welcome to Otakstudio</h2>
         <form action="<?= base_url("Login/cekLogin"); ?>" method="post">
            <div class="main">
               <div class="form-left-to-w3l">
                  <input type="text" name="name" placeholder="Username" required="">
               </div>
               <div class="form-left-to-w3l ">
                  <input type="password" name="password" placeholder="Password" required="">
                  <div class="clear"></div>
               </div>
            </div>
            <div class="clear"></div>
            <div class="btnn">
               <h5>Belum punya akun? <a href="<?= base_url ("Daftar") ?>">klik disini!</a> </h5>
               <button type="submit">Sign In</button>
            </div>
         </form>

      </div>
      <div class="art-left-w3ls">
         <h1 class="header-w3ls">
            Login Form Otakstudio
         </h1>
      </div>
   </div>
   <footer class="bottem-wthree-footer">
      <p>
         © 2019 Otakstudio Sign in & Login Form. All Rights Reserved
      </p>
   </footer>
</body>

</html>