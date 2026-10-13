<?php
$a=rand(1,100);
  $b=rand(1,100);
echo "a=$a  ,";
echo "b=$b  ,";
$j=(($a%2==1 && $b%2==1) or ($a%2==0 && $b%2==0));

echo"j=$j ";

?>