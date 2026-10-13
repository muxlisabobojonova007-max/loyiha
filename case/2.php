<?php
$n=rand(1,5);
echo "n=$n    ,";
switch($n){
    case 1:
    echo"Yomon"; break;
    case 2:
    echo"Qoniqarsiz"; break;
    case 3:
    echo "Qoniqarli"; break;
    case 4:
    echo"Yaxshi"; break;
    case 5:
    echo"A'lo"; break;

    default:
    echo "Xato";

}
?>