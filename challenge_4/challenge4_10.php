<?php
    do {
        echo "正の整数値：";
        $num = (int)trim(fgets(STDIN,4096));
    } while ($num <= 0);

    $i = 1;
    $total = 1;
    while ($i <= $num){
        $total = $i * $total;
        $i++;
    }

    echo "1から".$num."までの積は".$total."です。";