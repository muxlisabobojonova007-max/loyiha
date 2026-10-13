<?php
$a=rand(1,10);

echo "a=$a ";
$d=1;
$s=0;
for($i=1; $i<=$a; $i++){
    
 $d*=1/$i;
 $s+=$d;
}
echo "d=$d   "; 
echo "s=$s  ";   

?>