<?php
$n = 10; //размер матрицы
    for ($i = 0; $i < $n; $i++){
        for ($j = 0; $j < $n; $j++){
            $a[$i][$j] = rand(0, 5);
        }
    }
    
    for ($j = 0; $j < $n; $j++) {
        if (in_array(0, $a[$j])) continue;
        else { 
                $mult = array_product($a[$j]);
                echo $j, ' = ', $mult, '<br>';
             }
    }
