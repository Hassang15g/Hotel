<?php 
                                        // .....[ الكود الاساسي ]........

#_______________________________ المتغيرات 
$connect=mysqli_connect("localhost","root","","hotals"); ##_____ الاتصل بقاعدة البيانات____________________
 
##function closeSQL() {mysqli_close('localhost','root','','hotals');} ##____________( قطع الاتصال بقاعدة البيانات )


// _________________________________________________________________________________( option slect tapol sql in SUL for type )
function option($connect)
  {
  $selectda="select * from sul ";
  $resd1=mysqli_query( $connect,$selectda);
                  while( $slesql1=mysqli_fetch_array ($resd1))
                          {
                          $type=$slesql1['type'];
                          $sul=$slesql1['EL\1d'];
                          echo "<option value='$type' >"." le ". $type ." " .$sul." </option> " ;
                          
                          
                          } 
}
#_________________________________________________________________________________________________ ( استمارة الحجز )

function singddatasql($connect,$dna) 
{
 if(isset($_POST['sub'])) 
 {
                      $far3=$_POST['far3'] ; 
                      $no3=$_POST['no3'];    
                      $sunames=$_POST['usname'] ; 
                      $nidcards=$_POST['nidcard'] ; 
                      $usphons=$_POST['tel'] ; 
                      $emails=$_POST['usemail'] ; 
                      $stdats=$_POST['stdata'] ; 
                      $endatas=$_POST['endata'] ;
                      $stdats[8].$stdats[9]; // day start       
                      $stdats[6].$stdats[5]; //manth  start
                      $endatas[8].$endatas[9]; // day end       
                      $endatas[6].$endatas[5]; //manth  end
                     $day=(($endatas[8].$endatas[9])-($stdats[8].$stdats[9]));
                     $muth=($endatas[6].$endatas[5])-($stdats[6].$stdats[5]);
                     settype($day,'integer');
                     settype($muth,'integer'); 
                   
if ($_POST['nidcard']!=$_POST['nidcard2']) 
   {
        echo "<p class='m1'> خطاء رقم الهوية الشخصية غير مطابق الرجاء التاكد واعادة المحاوله مرة اخري </p>
                                <style type='text/css'> 
                                .m1{ text-align: center;
                                  position: absolute;
                                  top: 527px;
                                  left: 259px;
                                  background-color: rgb(255 4 4 / 20%);
                                  color: #1a0303;
                                  width: 60%;
                                  height: 39px;
                                  font-size: large; }
                                </style>";
    }
      if ($day==0 || $day<0 && $muth<=0){
          echo "<p class=' '> الرجاء ادخال تاريخ صحيح  </p>
                            <style type='text/css'> 
                            .m2 { text-align: center;
                              position: absolute;
                              top: 760px;
                              left: 259px;
                              background-color: rgb(255 4 4 / 20%);
                              color: #1a0303;
                              width: 60%;
                              height: 39px;
                              font-size: large; }
        </style>"; }
      

      #_____________________________________حساب الفتوره _____________________________

                                  if ($no3=="غرفة شخصية لفرد واحد" )
                                  { $alls=$day*150;}
                                  if ($no3=="غرفة لشخصين")
                                  {$alls=$day*300;}
                                  if ($no3=="غرفة خاصة ")
                                  { $alls=$day*400;}
                                  if ($no3=="غرفة عائلية ")
                                  { $alls=$day*500;}
                                  if ($no3=="جناح خاص")
                                  { $alls=$day*1000;}
                           

  if ($day>0  && $muth<=0 || $muth<0 ){
 // عملية المعالجة للبيانات والتاكد من صحتها وعدم تكراره بقاعدة البيانات
            $eltakdMenDataName="select * from $dna where names='$sunames'";                                          
            $atakdName=mysqli_query($connect,$eltakdMenDataName);
            if(mysqli_num_rows($atakdName)>0){
                echo " <p class='m3'> خطاء تم  الحجز بهذا الاسم بالفعل  بلموعد المحدد قد يكون هناك تشبه بلاسم يرجاه ادخال الاسم رباعي بشكل اوضح  </p>
                <style type='text/css'>
                 .m3 { text-align: center;
                  position: absolute;
                  top: 422px;
                  left: 254px;
                  background-color: rgb(255 4 4 / 20%);
                  color: #1a0303;
                  width: 60%;
                  height: 39px;
                  font-size: large;}
                 </style>";
            } 
            $eltakdMenDataIdcard="select * from $dna where idcards='$nidcards'";                                        
            $atakdIdcard=mysqli_query($connect ,$eltakdMenDataIdcard);
          if (mysqli_num_rows($atakdIdcard)>0)
              {
                 echo " <p class='m4'> خطاء تم تقديم طلب حجز بالفعل  برقم الهوية الشخصي المحدد الرجاء التاكد من صحة البيانات  </p>
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
                 </style>
                 ";
              }


     // في حالة البيانات بشكل سليم 
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
                $insert="insert into $dna values ('$far3','$no3','$sunames',' $nidcards','$usphons',' $emails',' $stdats','$endatas',' $day','$muth','$alls')";
                 mysqli_query($connect , $insert); 
 }}}}
?>