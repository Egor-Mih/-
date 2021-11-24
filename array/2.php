<?php
    $a = array(0, 1, 2, 3, 4, 5, 6, 7);
    $n = count($a);
    for ($i = 0, $b = 0; $i < $n; $i++){
        if ($i % 2 == 1){
            $c = $a[$b];
            $a[$b] = $a[$i];
            $a[$i] = $c;
            $b++;
        }
    }
    var_dump($a);
?>

<?php
    $a = array(0, 1, 2, 3, 4, 5, 6, 7);
    $n = count($a);
    for ($i = 0; $i < $n; $i++) {
        if ($a[$i] % 2 == 1)  $left[] = $a[$i];

        else $right[] = $a[$i];   
    }
    var_dump(array_merge($left , $right));