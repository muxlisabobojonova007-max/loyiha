<?php
$A=rand(1,4);
$B=rand(1,4);
echo "A=$A  ";
echo "B=$B  ";
$n=rand(1,4);
echo "n=$n  ";
switch($n){
    case 1:
  echo " NATIJA:".$A+$B;break;
  case 2:
    echo " NATIJA:".$A-$B;break;
    case 3:
    echo " NATIJA:". $A*$B; break;    
case 4:
    if($b!=0){
    echo " NATIJA:".$A/$B ;break;}
    else {
        echo " 0 bo'lishi mumkin emas";
    }
    default:

echo "xato ";


}

?>