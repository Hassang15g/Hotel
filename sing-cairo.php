
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>sing in shrm cairo </title>
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
   
   <a href="#" class="logo"> <i class="fas fa-hotel"></i> hotel cairo </a>

   <nav class="navbar">
             <a href="./index.html">home</a>
             <a href="./homeSH.html">Sharm El Sheikh branch </a>
             <a href="./sing-cairo.php">sign in cairo</a>
             <a href="./RegisterCairo.php" class="btn"> book now in cairo </a>
          </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</header>
<br><br><br><br><br><br>
<!-- end -->
<section  class="reservation" id="reservation">
<h1 class="heading">Sign In Cairo</h1>
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
      $nSQL="select * from usmanger where EMAILS ='$usadres' AND PASSORD ='$uspassword' or NAMES ='$usadres' AND PASSORD ='$uspassword'";  
   if ($resalt= mysqli_query($connect,$nSQL)){
         if  (mysqli_num_rows($resalt)==1) {
               header("location:http:./manger/home-mangear-cairo.php"); }       
         if (mysqli_num_rows($resalt) !==1 ) {
            echo " <p id = 'm'>  كلمة المرور او اسم المستخدم خطاء اعد المحاولة  </p>
                        <style type='text/css'> 
                        #m{
                              background-color: #ff030399;
                              color: #fffafa;
                              font-size: 21px;
                              width: 50%;
                              height: 8%;
                              text-align: center;
                              position: absolute;
                              top: 62%;
                              left: 19% } </style> "; }
                 
    }
 }
    mysqli_close($connect);  
   ?>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="./js/script.js"></script>

</body> 
</html>
