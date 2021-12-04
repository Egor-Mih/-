<?php
require 'functions.php';

$items = 5;
$page = Page();

$text = file_get_contents("text.txt");
$text = TextPreProcessing($text);

$pagesCount = PagesCount($text, $items);
$pageContent = FromTo($text, $items, $page);

//var_dump(Bold($pageContent));


include 'template/page.php';