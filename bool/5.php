<?php
$a=rand(-100,100);
  $b=rand(-100,100);
$c=rand(-100,100);
echo "a=$a  ,";
echo "b=$b  ,";
echo "c=$c  ,";
$j=(($a<0 && $b>0 && $c>0) or($a>0 && $b>0 && $c<0) or($a>0 && $b<0 && $c>0));

echo"j=$j ";

?>