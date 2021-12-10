<?php
function Page(){
   return intval($_GET['page'] ?? 1);
}

// Подсчет количества страниц
function PagesCount($text, $items){
    $pagesCount = ceil($text/$items);
    return $pagesCount;
}
//Отбор информации на страницу
function FromTo($items, $page, $link){
    $from = ($page - 1) * $items;
    $result = $link->query("SELECT content FROM text ORDER BY id DESC LIMIT $from, $items");
    $res = $result->fetch_all(MYSQLI_ASSOC);
    foreach ($res as $value){
        foreach ($value as $i){
            $fromTo[] = $i;
        }
    }
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

