<?php
function Page(){
   return intval($_GET['page'] ?? 1);
}
function LineFeed($text){
    if (strpos($text, "\r\n") !== false 
    || strpos($text, "\r") !== false)
    return str_replace(["\r\n", "\r"], "\n", $text);
    else return $text;  
}


//Разбитие текста на абзацы
function TextPreProcessing($text){
    $textarr = trim($text, " \n\r");
    $textarr = explode("\n", $textarr);
    $textarr = array_values(array_filter($textarr));
    foreach($textarr as $i) $i = trim($i, " \n\r"); 
    return $textarr;
}
// Подсчет количества страниц
function PagesCount($text, $items){
    $countParagraph = count($text);
    $pagesCount = ceil($countParagraph/$items);
    return $pagesCount;
}
//Отбор информации на страницу
function FromTo($text, $items, $page){
    $from = ($page - 1) * $items;
    $fromTo = array_slice($text, $from, $items);
    return $fromTo;
}

//Функцию на выделение жирным
function Bold($text){
    return preg_replace('/[А-ЯЁ]/u', "<b>$0</b>", $text);
}

function Colorise($string){
   return preg_replace(["/Дорогие/iu", "/следует/iu"],"<span style=color:red>$0</span>",$string);
}   

//Создание ссылок
function LinkList($pagesCount, $number){
    $a = '';
    for ($i = 1; $i <= $pagesCount; $i++){
        $link = "<a href=/index.php?$number=$i\>$i</a>";
        $a .= $link;
    }
    return $a;
}
//Подсчет символов, предложений и слов
function PageInfo($pageContent){
    $i = 0;
    foreach ($pageContent as $value){
        $length = iconv_strlen($value);
        $word = mb_substr_count($value, ' ') + 1;
        $str = mb_substr_count($value, '. ') + mb_substr_count($value, '? ') + mb_substr_count($value, '! ') + 1;
        $b[$i] = [$length, $word, $str];
        $i++;
    }
    return $b;
}

