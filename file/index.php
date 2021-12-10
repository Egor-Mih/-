<?php
require 'functions.php';


$handle = fopen('text.txt', 'r');
$text = FileRead($handle);
$stringSelection = Find($text);
fclose($handle);
$handle = fopen('new.txt', 'w');
for ($i=0; $i < count($stringSelection); $i++) fwrite($handle, $stringSelection[$i]);

