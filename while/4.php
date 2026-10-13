<?php
$a=rand(10,100);
echo "a=$a  ,";

$s=0;
while($a>0){
    $a=$a-3;
    $s++;

}
echo "$s marta qatnashgan  ";

echo "  $a qoldiq";
if($a==3){
    echo "3 ga karrali ";
}
else{
    echo " 3 ga karrali emas ";
}
?>