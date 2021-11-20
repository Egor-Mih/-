<?php
//Сумка
$a=20;
$b=30;
//Товар
$c=25;
$d=30;

if($a>=$c&&$b>=$d) echo "Можно";
elseif ($a>=$d&&$b>=$c) echo "Можно";
else echo "Нельзя";