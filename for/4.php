<?php
$a=rand(1,10);
$b=rand(1,10);
echo "a=$a ";
echo "b=$b  ";
$s=0;
for($i=$a; $i<=$b; $i++){
    if($a<$b){
    $s+=pow($i,2); 
  
}
}
echo " s=$s  ";   

?>