<?php
$a=rand(-100,100);
$b=rand(-100,100);
$c=rand(-100,100);
$d=rand(-100,100);
echo "a=$a  ,";
echo "b=$b  ,";
echo "c=$c  ,";
echo "d=$d  ,";
if($a==$b && $b==$c){
  echo "4  ";
}
else if($a==$c && $c==$d){
  echo "2 ";
}
else if($b==$c && $b==$d){
  echo "1 ";
}
else if($a==$b && $b==$d){
  echo " 3";
}
else{
  echo "0,";
  
}
?>