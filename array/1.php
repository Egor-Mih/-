<?php
    $a = array(61, 22, 43, 22, 10, 22, 23, 19);
    $max = $a[0];
    $min = $a[0];
    $imin = 0;
    $imax = 0;
    $n = count($a);
    for ($i = 1; $i < $n; $i++){
        if ($a[$i] < $min) {
            $min = $a[$i];
            $imin = $i;
        }
        if ($a[$i] > $max) {
            $max = $a[$i];
            $imax = $i;
        }
    }
    
    
    $mult = 1;

    if (abs ($imax - $imin) == 1 || $imax == $imin)     exit('Нечего выводить');
    elseif ($imax > $imin)
        for ($imin += 1; $imin < $imax; $imin++) $mult = $mult * $a[$imin];
    else  
        for ($imax += 1; $imax < $imin; $imax++) $mult = $mult * $a[$imax];
        
        echo $mult;
    ?>

<?php
    $a = array(10, 22, 43, 22, 61, 22, 23, 19);
    $imin = array_keys($a, min($a))[0];
    $imax = array_keys($a, max($a))[0];

    if (abs ($imax - $imin) == 1 || $imax == $imin)     exit('Нечего выводить');
    elseif ($imin > $imax){
        $arr = array_slice($a, $imax + 1, $imin - $imax - 1);
        echo array_product($arr);
    }
    else {$arr = array_slice($a, $imin + 1, $imax - $imin - 1);
    echo array_product($arr);
}
