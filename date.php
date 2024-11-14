<center>
<!-- date of to day in our word -->
 <?php
$date=date('Y-m-d h:i:sa');
switch($date){
    case date('Y-m-d h:i:sa'):
        echo"Today is:"." ".$date;
        break;
        default:
        echo"Invalid date";
}
 ?>
</center>