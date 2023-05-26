<!DOCTYPE html>
<html >
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>sing in shrm El-Sheikh </title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css link -->
   <link rel="stylesheet" href="./style/style.css"> 
</head>
<body> 
 <!-- header -->

 <header class="header">

 <a href="#" class="logo"> <i class="fas fa-hotel"></i> hotel sharm</a>

<nav class="navbar">
         <a href="./homeSH.html">home</a>
         <a href="./index.html">Cairo branch</a>
         <a href="./SignInSH.php">sign in sharm</a>        
         <a href="./RegisterSharm.php" class="btn"> book now</a>
      </nav>
<div id="menu-btn" class="fas fa-bars"></div>

</header>    
<br><br><br><br><br><br>
<section  class="reservation" id="reservation">

<h1 class="heading">Sign In shrm el_shekh</h1>

<form  action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

 <div class="container">

      <div class="box">
         <p>Entry ID  <span>*</span></p>
         <input class="input" name="usadres" type="text"  placeholder="Entry ID OR NAME " required>
      </div> 

      <div class="box">
         <p> password  <span>*</span></p>
         <input class="input" name="uspassword" type="password"  placeholder=" password " required>
      </div> 
</div>
      <input class="btn" name="submitlog" type="submit" value=" دخول "> 
</form>
 <?php
      $connect=mysqli_connect("localhost","root","","hotals");  
 if(isset($_POST['submitlog'])){
        $usadres=$_POST['usadres']; 
        $uspassword=$_POST['uspassword'];
        $nSQL="select * from usmanger where EMAILS ='$usadres' AND PASSORD ='$uspassword'";  
        if ($resalt= mysqli_query($connect,$nSQL)){
                        if  (mysqli_num_rows($resalt) ==1) {
                           echo " <a href ='/manger/homeMangearSharm.php'><bottn class='btn'>oppen home maneger</bottn> </a>"; }
                        if (mysqli_num_rows($resalt)!=1) {
                              echo " <p id = 'masg'> كلمة المرور او اسم المستخدم غير صحيح !  </p>"; }       
             }
    }
    mysqli_close($connect);  
       ?>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="./js/script.js"></script>
     

</body>
</html>
