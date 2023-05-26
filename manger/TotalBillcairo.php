<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css link -->
    <link rel="stylesheet" href="../style/style.css">
   <!-- custom css link   <link rel="stylesheet" href="../style/stmang.css">-->

    <title>     مجموع الفوتير     </title>
    
</head>
<body > 

  <!-- header -->

  <header class="header">
      <a href="#" class="logo"> <i class="fas fa-hotel"></i> hotel c </a>
      <nav class="navbar">
      <a href="./home-mangear-cairo.php">Add guest</a>
      <a  href="./administrationCairo.php"> administration </a> 

       <a href="./hed-f1-cairo.php">reservation requests </a>
       <a href="./hed-f2-cairo.php">Billing management</a>
            <a  href="TotalBillcairo.php"> Total billing </a> 
            <a href=".././index.html" class="btn">sign out</a>
         </nav>
</header>    
<!-- end -->   
              
 <main class='cardebody'>
 <table  dir ='rtl'  border="1" >
    <tr  id="header" >
        <th > الفرع</th> 
        <th  >نوع الحجز</th> 
        <th >الاسم الرباعي   </th>
        <th > عدد الايام </th>
        <th >  عدد ايام النزول  </th>
        <th >    مطلوب الدفع  </th>
        <th width="">  المدفوع   </th>
        </tr>   
        <?php   include("carde.php");   ?>  
 
  </main> 

    

 </body>
 </html>




