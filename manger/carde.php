<?php 
  $connect=mysqli_connect("localhost","root","","hotals");
$sqlsarm="SELECT * FROM TotalBills where  adres=' شرم الشيخ'";
$sqlcairo="SELECT * FROM TotalBills where adres='فرع القاهرة'";     
$sqlSH="SELECT * FROM sharmsul";
$sqlciO="SELECT * FROM cairosul";          
$rsharm=mysqli_query( $connect,$sqlsarm);
$rcairo=mysqli_query( $connect,$sqlcairo);
$dt1=mysqli_query( $connect,$sqlSH);
$dt2=mysqli_query( $connect,$sqlciO);
$AllManySharmT1=0;
$AllManyCairoT1=0;
$ManySharm=0;
$ManyCairo=0; 
$XSarm=0;
$XCairo=0;
            while( $row=mysqli_fetch_array ($rsharm)){
            $adrs1=$row['adres'];
            $typesql1=$row['types'];
            $namess=$row['names'];
            $idcards=$row['idcards'];
            $DAYS=$row['DAYS'];
            $MANTH=$row['PaymentIsRequired'];
            $allsuls=$row['paidUp'];
            echo "<tr cleass='styletr' > 
            <td class ='styletd0 '> $row[adres]  </td> 
            <td class ='styletd1'> $row[types] </td> 
            <td class ='styletd2'> $row[names] </td>
            <td class ='styletd1'> $row[idcards] </td>
            <td class ='styletd3'> $row[DAYS] </td>
            <td class ='styletd2'>$row[PaymentIsRequired] جـ</td>
            <td class ='styletd1'> $row[paidUp] جـ </td>  
            <tr>" ;  
            $XSarm++ ;$ManySharm+=$allsuls;}
            while( $row=mysqli_fetch_array ($rcairo)){
            $adrs1=$row['adres'];
            $typesql1=$row['types'];
            $namess=$row['names'];
            $idcards=$row['idcards'];
            $DAYS=$row['DAYS'];
            $MANTH=$row['PaymentIsRequired'];
            $allsuls=$row['paidUp'];
            echo "<tr cleass='styletr' > 
            <td class ='styletd0 '> $row[adres]  </td> 
            <td class ='styletd1'> $row[types] </td> 
            <td class ='styletd2'> $row[names] </td>
            <td class ='styletd1'> $row[idcards] </td>
            <td class ='styletd3'> $row[DAYS] </td>
            <td class ='styletd2'>$row[PaymentIsRequired] جـ</td>
            <td class ='styletd1'> $row[paidUp] جـ </td>  
            <tr> <br><br><br> " ;
            $XCairo++ ;$ManyCairo+=$allsuls;}
            while( $x=mysqli_fetch_array ($dt1)){  $AllManySharmT1 +=$x['allsuls']; break;  } 
            while( $y=mysqli_fetch_array ($dt2)){ $AllManyCairoT1+=$y['allsuls']; break;  } 
            mysqli_close($connect);                    
 ?>

 <!-- Content Row كرت اسعراض المال  -->
 <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                         اجمال ارباح فرع شرم الشيخ </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> le <?php echo "".$ManySharm ?>  </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        اجمالي ارباح القاهرة </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> le <?php echo "".$ManyCairo ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-500"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                      ارباح منتظرة بفرع شرم   </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> le <?php echo "".$AllManySharmT1 ?> </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-500"></i>
                </div>
            </div>
        </div>
    </div>
</div>
 
<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                    ارباح منتظرة بفرع القاهرة </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">  le <?php echo "".$AllManyCairoT1 ?>  </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-500"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--  end -->

<!-- Content Column -->
<div class="col-lg-12 mb-4">
 
<!-- Project Card Example -->
<div class="card shadow mb-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">تقيم نسبة المحجوز بكل فرع  </h6>
    </div>
    <div class="card-body">
        <h4 class="small font-weight-bold">شرم الشيخ  <span
                class="float-right"> <?php    echo "% : ".($XSarm/200) ;  ?></span></h4>
        <div class="progress mb-4">       
         <?php echo "  <div class='progress-bar bg-danger' role='progressbar' style='width:$XSarm%'
                aria-valuenow='0'.$XSarm aria-valuemin='0' aria-valuemax='100'></div>"; ?>  
        </div>
        
        <h4 class="small font-weight-bold">القاهرة <span
                                            class="float-right"> <?php    echo "% : ".($XCairo/200) ;  ?></span></h4>
                                    <div class="progress mb-4">
                                    <?php echo "  <div class='progress-bar bg-info' role='progressbar' style='width:$XCairo%'
                                            aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'> </div>"; ?>   
                                    </div>
      </div>
      </div> 
        
    </div> <!-- end -->
    
    





    <style type='text/css'>      
     /*    الستيل الخاص بالجدول في الصفحة وعناصر  الدفع  */      
     * {font-size: 16px}     
  .cardebody {margin-top:8%;
margin-bottom: 2%;   }           
                  table{
    margin-top:1.5% ;
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
                   .MSentermany{
                                    background-color:#40cc08;
                                    color: #000000;
                                    display: inline-block;
                                    font-size: 14px;
                                    font-weight: 500;
                                    text-align: center;
                                    text-decoration: none;
                                    }
                                                    
</style>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="./js/script.js"></script>

 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="js/sb-admin-2.min.js"></script>
 <!-- Page level plugins -->
 <script src="vendor/chart.js/Chart.min.js"></script>

 <!-- Page level custom scripts -->
   