<?php include("control.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Cairo</title>
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

      <a href="#" class="logo"> <i class="fas fa-hotel"></i> hotel </a>
  
      <nav class="navbar">
             <a href="./index.html">home</a>
             <a href="./homeSH.html">Sharm El Sheikh branch </a>
             <a href="./sing-cairo.php">sign in cairo</a>
             <a href="./RegisterCairo.php" class="btn"> book now in cairo </a>
          </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
  
   </header>
  
   <!-- end -->

<section  class="reservation" id="reservation">
<br><br><br><br><br><br><br>
    <h1 class="heading">Book now in Cairo</h1>
  
    <form  action="" method="POST">
  
       <div class="container">
  
          <div class="box">
            <p> reservation branch <span>*</span></p>
          <select  class="input" name="far3" required >
            <option value="فرع القاهرة">Cairo branch  </option>
                </select> 
               </div>

               <div class="box">
                  <p>  Reservation type <span>*</span></p>
               </select> 
               <select class="input" name="no3" required>
               <option> </option>
                   <?php  option($connect);  ?>
                   </select> 
                     </div>
      
                     <div class="box">
                        <p>name <span>*</span></p>
                        <input type="text" class="input"   name="usname"    placeholder="Your Name" required>
                     </div>

                     <div class="box">
                        <p>email <span>*</span></p>
                        <input type="email" class="input" name="usemail" placeholder="Your Email">
                     </div>

               <div class="box">
                  <p>Personal identification number <span>*</span></p>
                  <input class="input" type="number" name="nidcard" placeholder=" Personal identification number" required>
               </div>

               <div class="box">
                  <p> Confirm personal identification<span>*</span></p>
                  <input class="input" type="number" name="nidcard2" placeholder=" Confirm personal identification" required>
               </div>

               <div class="box">
                  <p> Nationality <span>*</span></p>
                  <input class="input" type="text"name="gins" placeholder="Nationality" required>
               </div>

               <div class="box">
                  <p>Contact phone number <span>*</span></p>
                  <input class="input" type="tel" name="tel" placeholder=" Contact phone number" required>
               </div>

               <div class="box">
                  <p> Reservation from date<span>*</span></p>
                  <input class="input" type="date" name="stdata" requirsed><br>

               </div>
         
               <div class="box">
                  <p>Until date<span>*</span></p>
                  <input class="input" id="enddata" type="date" name="endata"  required>

               </div>
      
       </div>
       <input type="submit" value="Submission of the application" class="btn"   name="sub">
    </form>
  
  </section>
  
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <script src="./js/script.js"></script>

  <?php
   $dna="cairo";
   singddatasql($connect,$dna);
   mysqli_close($connect);  

 ?>
</body>
</html>
