<?php
$a=rand(-100,100);
  $b=rand(-100,100);
$c=rand(-100,100);
echo "a=$a  ,";
echo "b=$b  ,";
echo "c=$c  ,";
if($a==$b){
  echo "3  ";
}
else if($a==$c){
  echo "2 ";
}
else if($b==$c){
  echo "1 ";
}
else{
  echo "0,";
  
}
?>