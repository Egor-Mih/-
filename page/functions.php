<?php
function Page(){
    $page = intval($_GET['page'] ?? 1);
    return $page;
}

//Разитие текста на абзацы
function TextPreProcessing($text){
    $textarr = trim($text, " \n\r");
    $textarr = explode(PHP_EOL, $textarr);
    $textarr = array_values(array_filter($textarr));
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

//Функцию на выделение жирным не осилил
/*function Bold($pageContent){
    $i = 0;
    foreach ($pageContent as $value){
    $str0 = mb_substr($value, 0, 1);
    $str1 = mb_substr($value, 1);
    $b[$i] = "<b>".$str0."</b>".$str1;
    $i++;
}
    return $b;
}
*/
function Colorise($string){
    
    $str_search = ["Дорогие", "дорогие", "Следует", "следует"];
    $str_raplace = ["<span style=color:red>Дорогие</span>","<span style=color:red>дорогие</span>","<span style=color:red>Следует</span>","<span style=color:red>следует</span>"];
    $b = str_replace($str_search, $str_raplace, $string);
    return $b;
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

