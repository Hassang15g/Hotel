<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css link -->
    <link rel="stylesheet" href="../style/style.css">

    <title>  طلبات الحجز فرع شرم الشيخ </title>
</head>
<body >  
 <!-- header -->

 <header class="header">

<a href="#" class="logo"> <i class="fas fa-hotel"></i> hotel sh </a>

<nav class="navbar">
       <a href="./HomeMangearSharm.php">Add guest</a>
       <a  href="./administrationSharm.php"> administration </a> 

       <a href="./hed-f1-sharm.php">reservation requests </a>
       <a href="./hed-f2-sharm.php">Billing management</a>
       <a  href="TotalBills.php"> Total billing </a> 
       <a href=".././homeSH.html" class="btn">sign out</a>
    </nav>
</header>      
<div class="stid" >
    <form dir='rtl'  method="get">
        <input class="sttext" type="number" name="id"  placeholder="   الرقم القومي / رقم الجواز  " > <br> 
        <?php
    if (isset($_GET['id']) && $_GET['id']!=0)  {
        $usidcard=$_GET['id'];  $c=mysqli_connect('localhost','root','','hotals');
        $sershsql ="SELECT * FROM sharm where idcards=$usidcard "; $resd=mysqli_query($c,$sershsql);

        while( $reternsql=mysqli_fetch_array ($resd) ){
         
            echo" <tr cleass=''><td class =''> $reternsql[adres] </td>      
            <td >  $reternsql[types] </td>  <td class =''> $reternsql[names] </td>
           
            <td >  $reternsql[idcards] </td> <td class =''> $reternsql[tel] </td>
            
            <td > $reternsql[emails] </td> <td class =''>  $reternsql[stdata] </td>
           
            <td>  $reternsql[endata] </td>  <td class =''>  $reternsql[DAYS] </td>
           
            <td > $reternsql[allsuls] LE </td> <td > مسجل </td > </tr>  "; 
           
          } 
    
                       
   } 
   if (isset($_GET['id']) && $_GET['id']>0 and   $_GET['id']!=0 ) {
    echo "<p class='m2'> غير مسجل      </p>";
  }        
  
   else {
    
  }
   
 ?>    
 </form>
</div>     
             
<main>
<table  border="1px" >
        <tr  id="ttr" >
        <th > الفرع</th> 
        <th  >نوع الحجز</th> 
        <th >الاسم الرباعي   </th>
        <th > رقم الهوية</th> 
        <th > رقم الهاتف</th>
        <th >  البريد</th>
        <th > تارخ النزول  </th>
        <th >حتي  </th>
        <th >  عدد ايام النزول  </th>
        <th >    مطلوب الدفع  </th>
        <th >    الحالة  </th>
        </tr>         
<?php
 include("control.manger.php"); 
 $nametapelsql='sharm'; $nametapelsql2='sharmsul'; $reternurl='hed-f1-sharm.php';
 hedf1($nametapelsql,$nametapelsql2,$reternurl,$connect);
 ?>
<style type='text/css'>         /*          الستيل الخاص بالجدول في الصفحة => ادارة الفوتير        */                    
   * {
     font-family: Verdana, Geneva, Tahoma, sans-serif;}
  table{
    margin-top:3% ;
    border-collapse: collapse; 
    width:100%;
    height:auto;
    border: 1px solid #bdc3c7;
    box-shadow: inset 1px -1px 8px 0px #b39ddb;
    }
     tr{
        transition: all 0.2s ease-in;
        cursor: pointer;
     }
      th,
      td{
         padding:7px;
         text-align: right;
         border-bottom: 1px solid #ddd;
      }
      #header{
        background-color: #16a085;
        color:#fff;
      }
      tr:hover{
        background-color: #f5f5f5;
      /*  transform: scale(1.02); */
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2),-1px, -1px, 8px,rgba(0, 0, 0, 0.2) ;
      } 
      .stid{width: 100%; margin-top:50px; margin-bottom:0px; overflow:hidden;  text-align:center;} 
                    .sttext{width:500px; height:50px; margin-top:90px; text-align:center ; font-size:18;border-radius:12px; border-color:#d1b6fc; border-style:dotted; color: #1b007a;} 
                    .sttext:hover{ border-color:#ff0055;}             

      .MSentermany{
        display: block;
        margin-top:18px;
        padding: 12px 27px;
        border-radius: 12px;
        font-size:14px;
        color:#880000;
        background-color:#05cc47;
        }
        .MSentermany:hover{
        background-color:#9cffd1;
        color: #110247;
        margin-top:13.5px;
        border-radius:25px;
        text-decoration:underline;
        }
        .MSt1{

        background-color:#cefcdd;
        color:#0508a3;
        display: inline-block;
        width:90%;
        height:50px;
        margin-bottom: 5px;
        margin-top:5px;
        margin-left:3%;
        text-align:center;
        font-size: 15px;
        font-weight: 500;
        text-decoration: none;
        }
      .pcard {
        position:relative;
        z-index:20;
      }
        #MScrde{
          display: inline-block;
          position:absolute;
          top:-30px;
          z-index:50;
          width:100% ;
          height:60px;
          margin-top:center;
          background-color: #ff9090;
          color: #1b007a;
          overflow: hidden;
          border: #1a0303 solid 1px;
          text-align: center;
        
        }
        /* for card  7ala */
      .m1 {
         background-color:#f4433699;
        color:#fff;
        position:absolute;
        top:12%;
        right:25%;
        width:50%;
        height:auto;
        margin-bottom: 15px;
        margin-top:15px;
        text-align:center;
        font-size: 18px;
        }
       
        
      </style>   
</main> 


   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
      
      <script src="./js/script.js"></script>
 </body>
 </html>       