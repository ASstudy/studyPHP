<?php
    echo "1からnまでの和を求めます。\n";
    
    do {
        echo "nの値：";
        $n = (int)trim(fgets(STDIN, 4096));
    } while ($n <= 0);

    $sum = 0;
    for($i=1; $i <= $n; $i++){
        $sum += $i; 
    }
    echo "1から".$n."までの和は".$sum."です。";


