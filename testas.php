<?php
$count = 0;
$m = 0;
do{
 $r = rand(3,5);
 $m += $r;
 $count ++;
} while($m < 20);

print_r ('katinas apibego:' .$count. ' ratu ir pagavo :' ." $m " .'(vnt.) peliu.');