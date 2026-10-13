<?php
$n=rand(1,100);
echo " $n ";
$s=1;
while($s>$n){
  $s*=$n;
  $n=$n-2;
    
  }
if($s%2==0){
    echo "juft";
}
else{
    echo "toq";
}
echo "   $s ";
?>