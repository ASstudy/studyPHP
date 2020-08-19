<?php
    
    do {
        echo "2以上の整数値：";
        $n = (int)trim(fgets(STDIN, 4096));
    } while ($n < 2);

    for($i = 2; $i < $n; $i++){
        if($n % $i === 0){
        break;
        } 
    }
    if($i === $n){
        echo "それは素数です。";
    } else {
        echo "それは素数ではありません。";
    }
    //breakで抜ければよかったんだ……！