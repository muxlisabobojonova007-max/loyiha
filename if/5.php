?php
$a=rand(-100,100);
  $b=rand(-100,100);
$c=rand(-100,100);
echo "a=$a  ,";
echo "b=$b  ,";
echo "c=$c  ,";
if(abs($a-$b)<abs($a-$c)){
  echo "b nuqta , abs($a-$b)  ";
}
else{
  echo "c nuqta, abs($a-$c)";
  
}
?>