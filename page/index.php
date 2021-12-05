<?php
require 'functions.php';

$items = 5;
$page = Page();

$text = file_get_contents("text.txt");
$text = LineFeed($text);
$text = TextPreProcessing($text);

$pagesCount = PagesCount($text, $items);
$pageContent = FromTo($text, $items, $page);
$countParagraph = count($pageContent);
$redtext = Colorise($pageContent);
$endtext = Bold($redtext);
$info = PageInfo($pageContent);


include 'template/page.php';