<?php
    $a = 5;
    $b = 1;
    $c = 7;
    $min = 0;
    $max = 0;

    if($a>=$b&&$a>=$c) $max=$a;
        elseif ($b>=$c) $max=$b;
            else $max=$c;

    if($a<=$b&&$a<=$c) $min=$a;
        elseif ($b<=$c) $min=$b;
            else $min=$c; 
$a=$max+$min;
echo "Max+Min = $a";           
