<?php
function FileRead($handle){
        while (($string = fgets($handle)) !== false){        
            $text[] = $string;
        
        }
return $text;
}

function Find($array) {
    $str = array();
    foreach ($array as $value){
        if (mb_stripos($value, "новая") !== false ||
         mb_stripos($value, "структура") !== false ||
         mb_stripos($value, "национальный") !== false)
         $str[] = $value;
    }
return $str;
}

