<?php
$a=rand(1,10);
$b=rand(1,10);
echo "a=$a ";
echo " b=$b ";
$s=0;
?>
<?php for($i=$a ;$i<$b;$i++): ?>
   <?php if($a<$b): ?>
  <p>$s+=$i</p>
<?php endif   ?>
<?php endfor echo "  s=$s"
?>