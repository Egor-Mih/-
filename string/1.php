<?php
    $text = file_get_contents("text.txt");
    $text = trim($text, " \n\r");

    // Задание 1
    echo "<h3>Задание 1</h3>";
    
    $str_search = 'Symfony';
    $str_replace = "<span style=color:red>$str_search</span>";
    echo "<h3>Задание 1</h3>";
    echo 'Встречается ', mb_substr_count($text, $str_search), ' раз<br>';
    echo str_replace($str_search, $str_replace, str_replace(PHP_EOL, '<br>', $text));

    //Задание 2
    echo "<h3>Задание 2</h3>";

    $count_Paragraph = mb_substr_count($text, PHP_EOL) + 1;
    $count_sentence = mb_substr_count($text, ". ") + $count_Paragraph;
    $count_word = mb_substr_count($text, ' ') + $count_Paragraph;
    echo 'Абзацев = ', $count_Paragraph, '<br>Строк = ', $count_sentence, '<br>Слов = ',$count_word, '<br> Символов = ', iconv_strlen($text);
  
    //Задание 4
    echo "<h3>Задание 4</h3>";

    $stat = count_chars($text, 1);
    $keys = array_keys($stat);
    foreach ($keys as &$value){
        $value = chr($value);
    }
    var_dump(array_combine($keys, $stat));

    //Задание 3
    echo "<h3>Задание 3</h3>";

    $del = ['.', ','];
    $text = str_replace($del, '', $text);
    $text = str_replace(PHP_EOL, ' ', $text);
    $arr = array_flip (explode(' ', $text)); //Одинаковые ключи удаляются!
    foreach ($arr as $i => $length){
        $arr[$i] = mb_strlen($i);
    }
    unset($length);
    $max = max($arr);
    foreach ($arr as $length){
        if ($length == $max) echo $i, '<br>';
    }

