<?php
//Сумка
$a=20;
$b=15;
$c=15;
//Товар
$d=20;
$e=10;
$f=15;

if ($a>=$d&&$b>=$e&&$c>=$f) echo "Можно";
elseif ($a>=$e&&$b>=$f&&$c>=$d) echo "Можно";
elseif ($a>=$f&&$b>=$d&&$c>=$e) echo "Можно";
else echo "Нельзя";