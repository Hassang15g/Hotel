<?php 
$connect=mysqli_connect("localhost","root","","hotals");  
// ___________________________________________________________________( option slect tapol sql in SUL for type )
function option2($connect) { 
                    $selectda="select * from sul ";   $resd1=mysqli_query( $connect,$selectda);               
                                    while( $slesql1=mysqli_fetch_array ($resd1)){                                           
                                                $type=$slesql1['type'];  $sul=$slesql1['EL\1d'];                                     
                                                echo "<option value='$type' >"." le ". $type ." " .$sul." </option> " ; }                                           
     }
#_________________________________________________________ استمالرة اضافة نزيل  

 function ADDSHARM($connect,$TYPYEDATA){
  if(isset($_POST['sub'])){
                            $far3=$_POST['far3'] ; $no3=$_POST['no3']; $sunames=$_POST['usname'] ; $emails=$_POST['usemail'] ;
                            $nidcards=$_POST['nidcard'] ; $usphons=$_POST['tel'] ; $stdats=$_POST['stdata'] ;
                             $endatas=$_POST['endata'] ;
                                                          $stdats[8].$stdats[9]; // day start       
                                                          $manth1=$stdats[5].$stdats[6]; //manth  start
                                                          $endatas[8].$endatas[9]; // day end       
                                                          $manth2=$endatas[5].$endatas[6]; //manth  end
                            $day=(($endatas[8].$endatas[9])-($stdats[8].$stdats[9])); $muth=($manth1-$manth2);
                            settype($day,'integer'); settype($manth1,'integer'); settype($manth2,'integer'); settype($muth,'integer');                   
                              if ($no3=="غرفة شخصية لفرد واحد" ) { $alls=$day*150;}
                              if ($no3=="غرفة لشخصين") {$alls=$day*300;}
                              if ($no3=="غرفة خاصة ")  { $alls=$day*400;}
                              if ($no3=="غرفة عائلية ") { $alls=$day*500;}
                              if ($no3=="جناح خاص") { $alls=$day*1000;}
 //____________________________________________________________________________ Processing of transmitted data___
    if ($_POST['nidcard']!=$_POST['nidcard2']) { echo "<p cleass='m1'> خطاء رقم الهوية الشخصية غير مطابق الرجاء التاكد واعادة المحاوله مرة اخري </p>
                                                <style type='text/css'> 
                                                .m1{
                                                      text-align: center;
                                                      position: absolute;
                                                      top: 527px;
                                                      left: 259px;
                                                      background-color: rgb(255 4 4 / 20%);
                                                      color: #1a0303;
                                                      width: 60%;
                                                      height: 39px;
                                                      font-size: large;}
                                                </style> ";}
    if ($day==0 || $day<0 && $muth<=0){echo "<p class='m2 '> الرجاء ادخال تاريخ صحيح  </p>
                                                <style type='text/css'>
                                                .m2 {
                                                      text-align: center;
                                                            position: absolute;
                                                            top: 760px;
                                                            left: 259px;
                                                            background-color: rgb(255 4 4 / 20%);
                                                            color: #1a0303;
                                                            width: 60%;
                                                            height: 39px;
                                                            font-size: large; }
                                                </style>"; }                           
     if ($day>0  && $muth<=0 || $muth<0 ){
             $eltakdMenDataName="select * from $TYPYEDATA where names='$sunames'";                                          
             $atakdName=mysqli_query($connect ,$eltakdMenDataName);
             if(mysqli_num_rows($atakdName)>0){
                 echo " <p  cleass='m3'> خطاء تم طلب حجز بهذا الاسم بالفعل  بلموعد المحدد قد يكون هناك تشبه بلاسم يرجاه ادخال اسمك  بشكل اوضح  </p>
                                                            <style type='text/css'>
                                                            .m3 {
                                                                  text-align: center;
                                                                  position: absolute;
                                                                  top: 422px;
                                                                  left: 254px;
                                                                  background-color: rgb(255 4 4 / 20%);
                                                                  color: #1a0303;
                                                                  width: 60%;
                                                                  height: 39px;
                                                                  font-size: large;}
                                                            </style> ";}            
             $eltakdMenDataIdcard="select * from $TYPYEDATA where idcards='$nidcards'";                                        
             $atakdIdcard=mysqli_query($connect ,$eltakdMenDataIdcard);
           if (mysqli_num_rows($atakdIdcard)>0){
                   echo " <p cleass='m4'> خطاء تم طلب حجز بالفعل  برقم الهوية الشخصي المحدد الرجاء التاكد من صحة البيانات </p>
                                                            <style type='text/css'>
                                                            .m4{text-align: center;
                                                                  position: absolute;
                                                                  top: 527px;
                                                                  left: 259px;
                                                                  background-color: rgb(255 4 4 / 20%);
                                                                  color: #1a0303;
                                                                  width: 60%;
                                                                  height: 39px;
                                                                  font-size: large;}
                                                            </style> "; } 
          if (mysqli_num_rows($atakdIdcard)==0 && mysqli_num_rows($atakdName)==0) 
               { 
                  echo "  <div class='msg'>
                  <h3 align='centar'>  $far3 </h3> <br>
                  <h2 align='center' class='ms'> تم الحجز  </h2> 
                   <table class='tabl'> 
                    <tr > <td  > الاسم </td>  <td> $sunames </td></tr> 
                   <tr> <td> الهوية الشخصية  </td><td>  $nidcards </td> </tr> 
                   <tr> <td > نوع الحجز  </td>  <td>  $no3</td> </tr>
                   <tr> <td>الهاتف</td> <td>  $usphons </td> </tr>
                   <tr><td> البريد </td> <td> $emails </td> </tr> 
                    <tr><td> الحجز من تاريخ</td> <td> $stdats </td> </tr> 
                    <tr><td> حتي تاريخ</td> <td>  $endatas </td> </tr> </table> 
                     <tr><td>  عدد ايام الحجز</td> <td> $day </td> </tr> </table> 
                     <tr><td>  اجمالي المطلوب دفعه </td> <td>  $alls </td> </tr> </table>                   
                  <form  method ='get'> <input class='btn' type ='submit' value ='تم '></form></div>            
                    <style typy=text/css>
                               
                    .msg {
                        position: absolute;
                        top: 266px;
                        left: 94px;
                        background-color: #ddd;
                        color: #e30707;
                        width: 87%;
                        height: auto;
                        border-radius: 24px;
                        box-shadow: #05073d 4px 5px 14px 2px, #05073e -5px 5px 14px 2px;
                        text-align: center;
                        font-size:27px;
                            }                                                                                     
                      .msg:hover {
                            box-shadow: #05073d 4px 5px 14px 2px, #05073e -5px 5px 14px 2px;}                                     
                                                                 
                        .tabl{
                              border-color: #1900ff;
                              color: #05073d;
                              width: 50%;
                              border-style: double;
                              direction: rtl;
                              display: inline-block;
                              margin-left: 23%;
                              margin-right: 40%;
                              text-align: center;
                              overflow: hidden;}                                           
                        .tabl > tr {color: black;}                                            
                        .tabl > tr > td {color: black; }                                     
                        #button-mg {
                            margin-bottom: 15px;
                            margin-left: 10px;
                            min-width: 100px;
                            background-color: rgb(96, 247, 51);
                            color:rgb(25, 0, 255) ;
                            margin-top: 20px;
                            border-radius: 5px;} 
                            .btn{
                              display: inline-block;
                              margin-top: 1rem;
                              margin-bottom: 22px;
                              padding: 1rem 6rem;
                              background: #221fe3;
                              border-radius: 0.5rem;}
                              .m1{
                                    text-align: center;
                                    position: absolute;
                                    top: 527px;
                                    left: 259px;
                                    background-color: rgb(255 4 4 / 20%);
                                    color: #1a0303;
                                    width: 60%;
                                    height: 39px;
                                    font-size: large;}
                                    .m2 {
                                          text-align: center;
                                          position: absolute;
                                          top: 760px;
                                          left: 259px;
                                          background-color: rgb(255 4 4 / 20%);
                                          color: #1a0303;
                                          width: 60%;
                                          height: 39px;
                                          font-size: large; }
                                          .m3 {
                                                text-align: center;
                                                position: absolute;
                                                top: 422px;
                                                left: 254px;
                                                background-color: rgb(255 4 4 / 20%);
                                                color: #1a0303;
                                                width: 60%;
                                                height: 39px;
                                                font-size: large;}
                                                .m4{text-align: center;
                                                      position: absolute;
                                                      top: 527px;
                                                      left: 259px;
                                                      background-color: rgb(255 4 4 / 20%);
                                                      color: #1a0303;
                                                      width: 60%;
                                                      height: 39px;
                                                      font-size: large;}                                             
                     </style> ";                            
                 $insert="insert into $TYPYEDATA values ('$far3','$no3','$sunames',' $nidcards','$usphons',' $emails',' $stdats','$endatas',' $day','$muth','$alls')";
                  mysqli_query($connect,$insert);  } 
                }
              }
 }
//...........................( ..hed f1 ..)
//...........................( ..for cairo and sharm..)

function hedf1($nametapelsql,$nametapelsql2,$reternurl,$connect){
$selectdata="select * from $nametapelsql "; $resdata=mysqli_query( $connect,$selectdata); $x=1; $y=1;
      while( $row=mysqli_fetch_array ($resdata)) {
                  $adrs1=$row['adres'];
                  $typesql1=$row['types'];
                  $namess=$row['names'];
                  $idcards=$row['idcards'];
                  $usphons=$row['tel'];
                  $emails=$row['emails'];
                  $sti=$row['stdata'];
                  $eti=$row['endata'];  
                  $DAYS=$row['DAYS'];
                  $MANTH=$row['MANTH'];
                  $allsuls=$row['allsuls'];
                  echo "<tr  border='1px'  cleass='' > 
                  <td  border='1px'  class =' '>  $row[adres]  </td> 
                  <td class =''>  $row[types] </td> 
                  <td class =''>  $row[names] </td>
                  <td class =''>  $row[idcards] </td>
                  <td class =''>  $row[tel] </td>
                  <td class =''> $row[emails] </td>
                  <td class =''>  $row[stdata] </td>
                  <td class =''>  $row[endata] </td>
                  <td class =''>  $row[DAYS] </td>
                  <td class =''>  $row[allsuls] LE </td>  
                   <td><form action='' method='get'>
                  <input name='a$x' class='btn' type='submit' value='تاكيد الحجز'>
                  <button name='d$y'  class=' btn2' >الغاء الطلب </button></form></td><tr>
                  <style type='text/css'>      
                  /*  style css for bottn taked eldaf3  and dlet el7a_hk_z */       
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
                                           .stid{width: 100%; margin-top:120px; margin-bottom:0px; overflow:hidden;  text-align:center;} 
                                       .sttext{width:500px; height:50px; margin-top:15px; text-align:center ; font-size:18;border-radius:12px; border-color:#d1b6fc; border-style:dotted; color: #1b007a;} 
                                       .sttext:hover{ border-color:#ff0055;} 
                             
                  .btn2{
                 margin-top:3px;
                 padding: 9px 10px; 
                 border-radius:5px;
                 font-size:18px;
                 color:#;
                 background-color:#05cc47;
                  }   
               
               
                  .btn2:hover{
                 background-color:#9cffd1;
                 color: #110247;
                 text-decoration:underline;
                 }           
                     
                       </style>  ";
                        if(isset($_GET['a'.$x])){ 
                              $iss="insert into $nametapelsql2 values('$adrs1','$typesql1','$namess',' $idcards','$usphons',' $emails',' $sti','$eti',' $DAYS','$MANTH','$allsuls')";
                              $del="delete FROM $nametapelsql where idcards=$idcards ";
                              mysqli_query($connect ,$iss);
                              mysqli_query($connect ,$del);
                              header("location:$reternurl");  }
                        if(isset($_GET['d'.$y])) {
                              echo "<br> <p color='#1a0772'> تم حذف البيانات والغاءالحجز</p>";
                               } 
                              $x++ ; $y++; } 
                               mysqli_close($connect);  }  
 //...........................( ..emd  ..)
 
                                                
 //...........................(for data two)
 function setlocalef2( $nametapelsql2,$Xtapelsql,$connect,$HTHtp){
 $selectdata="select * from $nametapelsql2";
 $resdata=mysqli_query( $connect,$selectdata);
 $namplog=0; $broom=200;$x=1;

      while( $row=mysqli_fetch_array ($resdata)) { 
        $adrs1=$row['adres'];$typesql1=$row['types'];$namess=$row['names'];$idcards=$row['idcards'];$DAYS=$row['DAYS'];$usname=$row['names'];$XMany=$row['allsuls']; $SheckMany=0;     
             echo "<tr cleass='styletr'> 
             <td class ='styletd0'>$row[adres]</td> 
             <td class ='styletd1'>$row[types] </td> 
             <td class ='styletd2'>$row[names] </td>
             <td class ='styletd1'>$row[idcards] </td>
             <td class ='styletd1'>$row[tel] </td>
             <td class ='styletd2'>$row[emails] </td>
             <td class ='styletd1'>$row[stdata] </td>
             <td class ='styletd1'>$row[endata] </td>
             <td class ='styletd3'>$row[DAYS] </td>
             <td class ='styletd1'>$row[allsuls] LE </td> 
             <td><form action=''method='get'>
             <input name='a$x' class='MSentermany' type='submit' value =' دفع الفتورة '>
             </form></td></tr>";
                   if (isset($_REQUEST['a'.$x])) { 
                        echo "  <form action='' method='get'>
                                       <input class='MSt1' type = 'number' name='SheckMany$x'  placeholder = ' القمة المدفوعه '>
                               </form> ";}
                        if (isset($_REQUEST['SheckMany'.$x]) && $_REQUEST['SheckMany'.$x] ==$XMany & $_REQUEST['SheckMany'.$x] >0  ){
                                                      $SheckMany0=$_REQUEST['SheckMany'.$x];                                               
                                                          $aSql="insert into TotalBills values('$adrs1','$typesql1','$namess','$idcards','$DAYS','$XMany','$SheckMany0')";
                                                          $del="delete FROM $Xtapelsql where idcards=$idcards";
                                                          mysqli_query($connect ,$aSql);
                                                          mysqli_query($connect ,$del);
                                                          header("location:$HTHtp");}     
                                                        if (isset($_REQUEST['SheckMany'.$x]) && $_REQUEST['SheckMany'.$x]!=$XMany  ){ echo "<div class='pcard' ><div id=MScrde><p id='MStext'>  خطاء ادخل القيمة المدفوعة بشكل صحيح للنزيل :  $usname  &#10006; </p></div></div>"; }                                                       
        $x++ ;   $namplog++ ; }                                                                          
$crome=$broom-$namplog ;

        //       الازرار المتوجدة بالجوانب الخاصاة بتعريف عدد الغرف الفعلي والمحجوز منه           
        //         بلاضافة للستيل الخاص بهم 
              echo "
                 <div id='mySidenav' class='sidenav'>
                           <a href='#' id='about'>اجمالي الحجوزات $namplog </a>
                           <a href='#' id='blog'>غرف فارغة $crome </a>
                   </div> 
                   <style type='text/css'>         /*          الستيل الخاص بالجدول في الصفحة => ادارة الفوتير        */                    

                   #mySidenav a {

                        position: absolute;
                        direction: rtl;
                        left:-170px;  
                        transition: 0.3s;
                        padding:15px;
                        width: 200px;
                        text-decoration: none;
                        font-size: 20px;
                        color: white;
                        border-radius: 0 6px 6px 0;
                        }
                  
                     #mySidenav a:hover {
                        left: 0;
                        }
                  
                        
                    #about {
                            top:200px;
                            background-color: #f44336;
                            }
                  
                            #blog {
                            top:115px;
                            background-color: #555555;
                             }
                        
                             <style >";
             
mysqli_close($connect); }          
?>