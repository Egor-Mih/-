<?php
$a=25;
$b=18;
$c=4;
$d=15;

if ($a>=$b&&$a>=$c&&$a>=$d) echo "max = $a";
    elseif ($b>=$c&&$b>=$d) echo "max = $b";
    elseif ($c>=$d) echo "max = $c";
    else echo "max = $d";