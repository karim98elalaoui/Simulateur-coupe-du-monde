<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <style>
       
        body{
            overflow-x: hidden;
        }
        li{
            list-style: none;
        }
        a{text-decoration: none;
        }
        img{
            height: 60px;
            width: 60px;
        }
        input{
            border: none;
            outline: none;
            padding: .6rem 0;
            padding-left: 1.3rem;
            font-size: 1.3rem;
            width: 8vh;
            border-radius: 5px;
        }
        .center {
          display:flex;
        justify-content: center;
        align-items: center;
        flex-direction:column;
        }
    </style>
    <title>Fifa World cup</title>
  </head>
  <body>
 
   
    <div class=" text-center text-white">
        <div class="row">
          <div class=" center col-sm-12 col-md-4 "   style="background-color: #3f0071; height: 100vh">
            <form action="" onload="false" method="post" >
                <section class="round1 border p-3 m-4">
                  <span>23 Nov 11:00Am</span>
                       <div class="match1 mb-3">
                         <img src="./icons/morocco.png" alt="">
                         <input value="<?php echo isset($_POST['moroccoMatch1']) ? $_POST['moroccoMatch1'] : "0" ?>" type="number" name="moroccoMatch1" class="w-10"  />
                         <input value="<?php echo isset($_POST['croatiaMatch1']) ? $_POST['croatiaMatch1'] : "0" ?>"  type="number" name="croatiaMatch1" id="croatiaMatch1"  />
                         <img src="./icons/croatia.png" alt="">
                         <br>
                       </div>
                       <div class="match2">
                         <img src="./icons/canada.png" alt="">
                         <input value="<?php echo isset($_POST['canadaMatch1']) ? $_POST['canadaMatch1'] : "0" ?>"  type="number" name="canadaMatch1" id="canadaMatch1" />
                         <input value='<?php echo isset($_POST['belgiumMatch1']) ? $_POST['belgiumMatch1'] : "0" ?>'   type="number" name="belgiumMatch1" id="belgiumMatch1"  />
                         <img src="./icons/belgium.png" alt="">
                         <br>
                       </div>
                       <div class="result">
                       <?php
                        // echo "morocco $moroccoGoals - $croatiaGoals croatia";
                        // echo "<br>";
                        // echo "canada $canadaGoals -   $belgiumGoals    belgium";
                        ?>
                        </div>
                 </section>
                 <!-- round2 -->
                 <section class="round2 border p-3 m-4">
                     <span>27 Nov 16:00Am</span>
                             <div class="match1 mb-3">
                               <img src="./icons/morocco.png" alt="">
                               <input value="<?php echo isset($_POST['moroccoMatch2']) ? $_POST['moroccoMatch2'] : "0" ?>" type="number" name="moroccoMatch2"/>
                               <input value="<?php echo isset($_POST['belgiumMatch2']) ? $_POST['belgiumMatch2'] : "0" ?>"   type="number" name="belgiumMatch2"  />
                               <img src="./icons/belgium.png" alt="">
                               <br>
                             </div>
                             <div class="match2">
                               <img src="./icons/canada.png" alt="">
                               <input value="<?php echo isset($_POST['canadaMatch2']) ? $_POST['canadaMatch2'] : "0" ?>"  type="number" name="canadaMatch2" />
                               <input value="<?php echo isset($_POST['croatiaMatch2']) ? $_POST['croatiaMatch2'] : "0" ?>"  type="number" name="croatiaMatch2"   />
                               <img src="./icons/croatia.png" alt="">
                               <br>
                             </div>
                         <div class="result">
                         <?php
                            // echo "morocco $moroccoGoals2 -  $belgiumGoals2   belgium  ";
                            // echo "<br>";
                            // echo "canada $canadaGoals2 -  $croatiaGoals2 croatia";
                          ?>
                         </div>
                 </section>
                 <!-- round3 -->
                 <section class="round2 border p-3 m-4">
                     <span>02  Dec 16:00Am</span>
                             <div class="match1 mb-3">
                               <img src="./icons/morocco.png" alt="">
                               <input value="<?php echo isset($_POST['moroccoMatch3']) ? $_POST['moroccoMatch3'] : "0" ?>" type="number" name="moroccoMatch3"/>
                               <input value="<?php echo isset($_POST['canadaMatch3']) ? $_POST['canadaMatch3'] : "0" ?>"  type="number" name="canadaMatch3" />
                               <img src="./icons/canada.png" alt="">
                               <br>
                             </div>
                             <div class="match2">
                               <img src="./icons/belgium.png" alt="">
                               <input value="<?php echo isset($_POST['belgiumMatch3']) ? $_POST['belgiumMatch3'] : "0" ?>"   type="number" name="belgiumMatch3"  />
                               <input value="<?php echo isset($_POST['croatiaMatch3']) ? $_POST['croatiaMatch3'] : "0" ?>"  type="number" name="croatiaMatch3"   />
                               <img src="./icons/croatia.png" alt="">
                               <br>
                             </div>
                         <div class="result">
                         <?php
                            // echo "morocco $moroccoGoals3 -  $canadaGoals3   canada";
                            // echo "<br>";
                            // echo " belgium  $belgiumGoals3   - $croatiaGoals3 croatia";
                          ?>
                         </div>
                 </section>
                 <button value="click" name="submit" type="submit" class="btn btn-primary fs-4 p-2">Simuler</button>
               </form>
          </div>


          <div class=" center col-sm-12 col-md-8 offset-md-0"    style="background-color:  #400D51; ">
              <section class="output w-100 " >
                <div class="header  text-bg-primary   d-flex w-100 justify-content-between">
                <span class="border-end p-2 w-100 text-center">Country</span>
                <span class="border-end p-2 w-100 text-center bg-danger h-100">PTS</span>
                <span class="border-end p-2 w-100 text-center">MTCH</span>
                <span class="border-end p-2 w-100 text-center">WIN</span>
                <span class="border-end p-2 w-100 text-center">EQUAL</span>
                <span class="border-end p-2 w-100 text-center">LOSE</span>
                <span class="border-end p-2 w-100 text-center">GOALS</span>
                <span  class=" p-2  border-end  w-100 text-center">OG</span>
                <span  class=" p-2 w-100 text-center">DF</span>
                </div>
              <div class="w-100  border "> 
              <?php
        if (
          isset($_POST['moroccoMatch1']) 
          && isset( $_POST['croatiaMatch1'])
        && isset( $_POST['belgiumMatch1'])
        && isset($_POST['canadaMatch1'])
          && isset( $_POST['moroccoMatch2'])
        && isset($_POST['croatiaMatch2'])
          && isset( $_POST['belgiumMatch2'])
        && isset(  $_POST['canadaMatch2'])
        && isset($_POST['moroccoMatch3'])
          && isset( $_POST['croatiaMatch3'])
        && isset( $_POST['belgiumMatch3'])
        && isset( $_POST['canadaMatch3'])) {
            //---------------
              //------Round 1--
              //---------------
                  //round 1 match 1
                  $Match =0;
                  //morocco
                  $moroccoGoals = $_POST['moroccoMatch1'];
                  $moroccoPoints = 0;
                  $moroccoWin =0;
                  $moroccoLose =0;
                  $moroccoEqual =0;
                  // croatia
                  $croatiaGoals= $_POST['croatiaMatch1'];
                  $croatiaPoints = 0;
                  $croatiaWin =0;
                  $croatiaLose =0;
                  $croatiaEqual =0;
                  //belgique
                  $belgiumGoals = $_POST['belgiumMatch1'];
                  $belgiumPoints = 0;
                  $belgiumWin =0;
                  $belgiumlose =0;
                  $belgiumEqual  =0;
                  //canada
                  $canadaGoals = $_POST['canadaMatch1'];
                  $canadaPoints = 0;
                  $canadaWin =0;
                  $canadalose =0;
                  $canadaEqual  =0;
                  //conditions
                  if ($moroccoGoals > $croatiaGoals) {
                    $moroccoPoints+=3;
                    $croatiaPoints+=0;
                    $moroccoWin++;
                    $croatiaLose++;
                    $Match =1;
                  }elseif($moroccoGoals === $croatiaGoals){
                    $Match =1;
                    $moroccoEqual++;
                    $croatiaEqual++;
                    $croatiaPoints+=1;
                    $moroccoPoints+=1;
                  }elseif($moroccoGoals < $croatiaGoals){
                    $Match =1;
                    $croatiaPoints+=3;
                    $moroccoPoints+=0;
                    $croatiaWin++; 
                    $moroccoLose++;
                  };
                //round 1 match 2
                  if ( $belgiumGoals> $canadaGoals) {
                    $belgiumPoints+=3;
                    $canadaPoints+=0;
                    $belgiumWin++;
                    $canadalose++;
                    $Match =1;
                  }elseif( $belgiumGoals === $canadaGoals){
                    $canadaPoints+=1;
                    $belgiumPoints+=1;
                    $belgiumEqual++;
                    $canadaEqual++;
                    $Match =1;
                  }elseif( $belgiumGoals < $canadaGoals){
                    $canadaPoints+=3;
                    $belgiumlose++;
                    $Match =1;
                    $belgiumPoints+=0;
                    $canadaWin++;
                  };
            //-----------
            //round 2 
            //-----------
              //round 2 match 1
                $moroccoGoals2 =$_POST['moroccoMatch2'];
                $croatiaGoals2 =$_POST['croatiaMatch2'];
                $belgiumGoals2 = $_POST['belgiumMatch2'];
                $canadaGoals2= $_POST['canadaMatch2'];
                if ($moroccoGoals2 > $belgiumGoals2) {
                  $moroccoPoints+=3;
                  $belgiumPoints+=0;
                  $moroccoWin+=1;
                  $belgiumlose++; 
                  $Match =2;
                }elseif($moroccoGoals2 === $belgiumGoals2){
                  $moroccoPoints+=1;
                  $belgiumPoints+=1;
                  $Match =2;
                  $moroccoEqual++;
                  $belgiumEqual++;
                }elseif($moroccoGoals2 < $belgiumGoals2){
                  $belgiumPoints+=3;
                  $moroccoPoints+=0;
                  $moroccoLose++;
                  $belgiumWin++; 
                  $Match =2;
                };  
              // round 2 match 2
                if (  $canadaGoals2 >  $croatiaGoals2) {
                  $canadaPoints+=3;
                  $croatiaPoints+=0;
                  $canadaWin++;
                  $croatiaLose++;
                  $Match =2;
                }elseif(  $croatiaGoals2 === $canadaGoals2){
                  $canadaPoints+=1;
                  $croatiaEqual++;
                  $canadaEqual++;
                  $croatiaPoints+=1;
                  $Match =2;
                }elseif( $canadaGoals  <$croatiaGoals2 ){
                  $croatiaPoints+=3;
                  $canadalose++;
                  $croatiaWin++;
                  $Match =2;
                  $canadaPoints+=0;
                  };
            //-----------
            //round 3
            //-----------
                //round 3 match 1
                  $moroccoGoals3 =$_POST['moroccoMatch3'];
                  $croatiaGoals3 =$_POST['croatiaMatch3'];
                  $belgiumGoals3 = $_POST['belgiumMatch3'];
                  $canadaGoals3 = $_POST['canadaMatch3'];
                  if ($moroccoGoals3 >  $canadaGoals3) {
                    $moroccoPoints+=3;
                    $canadaPoints+=0;
                    $moroccoWin+=1;
                    $canadalose++;
                    $Match =3;
                  }elseif($moroccoGoals3 ===  $canadaGoals3){
                    $canadaPoints+=1;
                    $moroccoPoints+=1;
                    $Match =3;
                    $moroccoEqual++;
                    $canadaEqual++;
                  }elseif($moroccoGoals3 < $canadaGoals3){
                    $canadaWin++;
                    $canadaPoints+=3;
                    $moroccoPoints+=0;
                    $moroccoLose++;
                    $Match =3;
                  };  
                //round 3 match2
                  if ($belgiumGoals3 > $croatiaGoals3) {
                    $belgiumPoints+=3;
                    $belgiumWin+=1;
                    $croatiaLose+=1;
                    $croatiaPoints+=0;
                    $Match =3;
                  }elseif($belgiumGoals3 ===   $croatiaGoals3){
                    $croatiaEqual++;
                    $belgiumEqual++;
                    $croatiaPoints+=1;
                    $belgiumPoints+=1;
                    $Match =3;
                  }elseif($belgiumGoals3 <   $croatiaGoals3){
                    $croatiaWin++;
                    $belgiumlose++;
                    $croatiaPoints+=3;
                    $belgiumPoints+=0;
                    $Match =3;
                  }; 
                
              // goals
                $moroccoAllGoals = $moroccoGoals + $moroccoGoals2 + $moroccoGoals3;
                $croatiaAllGoals =   $croatiaGoals +   $croatiaGoals2 + $croatiaGoals3;
                $belgiumAllGoals =  $belgiumGoals  +  $belgiumGoals2 + $belgiumGoals3;
                $canadaAllGoals =  $canadaGoals +  $canadaGoals2 + $canadaGoals3;
                //owm goals
                $moroccoOwn = $croatiaGoals + $belgiumGoals2 + $canadaGoals3;
                $croatiaOwn = $moroccoGoals + $canadaGoals2 +$belgiumGoals3;
                $belgiumOwn = $canadaGoals +  $moroccoGoals2 +$croatiaGoals3;
                $canadaOwn = $belgiumGoals+$croatiaGoals2 + $moroccoGoals3;
                //defrence
                $moroccoDifrence =  $moroccoAllGoals -   $moroccoOwn;
                $croatiaDifrence = $croatiaAllGoals -    $croatiaOwn ;
                $belguimDifrence =  $belgiumAllGoals  -  $belgiumOwn;
                $canadaDifrence =    $canadaAllGoals  - $canadaOwn ;
                //array 
            $teams = [
                  "0" =>[$moroccoPoints,  $Match,  $moroccoWin,$moroccoLose,$moroccoEqual,$moroccoAllGoals, $moroccoOwn,$moroccoDifrence ,"Morocco" ],
                  '1'=> [$croatiaPoints, $Match,$croatiaWin,$croatiaLose,  $croatiaEqual, $croatiaAllGoals ,$croatiaOwn,   $croatiaDifrence,"Croatia"  ],
                  '2'=>[$belgiumPoints,$Match,$belgiumWin,$belgiumlose,  $belgiumEqual, $belgiumAllGoals,$belgiumOwn ,$belguimDifrence,'Belgique' ],
                  '3'  =>[$canadaPoints,$Match,$canadaWin,$canadalose ,  $canadaEqual, $canadaAllGoals,$canadaOwn,  $canadaDifrence , 'canada']];
            ksort($teams);
            arsort($teams);
         
            usort($teams, function($a, $b) {
              if ($a[0] == $b[0]) {
                if ($a[7] == $b[7]) {
                  return $a[5] < $b[5] ? 1 : -1;
                }
                return $a[7] < $b[7] ? 1 : -1;
              }
              return $a[0] < $b[0] ? 1 : -1;
          
            });
            foreach($teams as $key => $value ){
              for ($i=0; $i < 1; $i++) { 
              echo "<div class='header border mb-4 mt-4 d-flex w-100 justify-content-between'>
                    <span class='border-end p-2 w-100 text-center'>$value[8]</span>
                    <span class='border-end p-2 w-100 text-center'>$value[0]</span>
                    <span class='border-end p-2 w-100 text-center'>$value[1]</span>
                    <span class='border-end p-2 w-100 text-center'>$value[2]</span>
                    <span class='border-end p-2 w-100 text-center'>$value[4]</span>
                    <span class='border-end p-2 w-100 text-center'>$value[3]</span>
                    <span class='border-end p-2 w-100 text-center'>$value[5]</span>
                    <span class=' p-2 w-100 border-end text-center'>$value[6]</span>
                    <span class=' p-2 w-100   text-center'>$value[7]</span>
                    </div>";
                  }
            }
       }
  
              
              ?>
            </div>
          </section>
           </div>
        </div>    
      </div>
    </div>
  
  </body>
</html>
