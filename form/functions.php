<?php
function Page(){
    return intval($_GET['page'] ?? 1);
 }



function PagesCount($total, $items){
    $pagesCount = ceil($total/$items);
    return $pagesCount;
}

function Select($items, $page, $mysqli){
    $from =  ($page - 1) * $items;
    $result = $mysqli->query("SELECT id, user, message_text, message_time FROM message ORDER BY id DESC LIMIT $from, $items");
    $res = $result->fetch_all(MYSQLI_ASSOC);
    
    return $res;
}

function LinkList($pagesCount, $number){
    $a = '';
    for ($i = 1; $i <= $pagesCount; $i++){
        $link = "<a href=/index.php?$number=$i\>$i </a>";
        $a .= $link;
    }
    return $a;
}