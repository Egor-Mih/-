<?php
require 'functions.php';

$items = 5;
$page = Page();

$link = mysqli_connect("localhost", "root", null, "page");
$result = $link->query('SELECT COUNT(1) FROM text');
$res = $result->fetch_all(MYSQLI_ASSOC);
$text = $res[0]['COUNT(1)'];
$pagesCount = PagesCount($text, $items);
$pageContent = FromTo($items, $page, $link);

$countParagraph = count($pageContent);
$redtext = Colorise($pageContent);
$endtext = Bold($redtext);
$info = PageInfo($pageContent);


include 'template/page.php';