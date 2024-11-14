
<center>
<?php

  $marks=14;
  if($marks >=90 && $marks<=100){
   echo "YOUR ARE WINNING GRADE A+";
  }elseif(
    $marks>=80 && $marks<=90
  ){
    echo "YOUR ARE COMPETENT GRADE B";
  }elseif($marks>=70 && $marks<=80){
    echo "YOUR ARE PASS GRADE C";
  }elseif($marks>=60 && $marks<=70){
    echo "YOUR ARE PASS GRADE D";
  }
  elseif($marks >=50 && $marks<=60){
    echo "YOUR ARE PASS GRADE E";
  }
  elseif($marks>=10 && $marks<=50){
    echo "YOUR ARE FAILED GRADE F";
  }



?>
</center>