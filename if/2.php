<?php
$a=rand(-100,100);
  $b=rand(-100,100);
$c=rand(-100,100);
echo "a=$a  ,";
echo "b=$b  ,";
echo "c=$c  ,";
if((a<b && b<a) or(a>b && b>c)){
  echo "2*$a  , 2*$b , 2*$c ";
}
else{
  echo "-$a ,";
  echo " -$b ,";
  echo "-$c ";
}
?>