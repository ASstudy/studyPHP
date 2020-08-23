<?php

    echo "要素数：";
    $n = (int)trim(fgets(STDIN, 4096));
    for($i = 0; $i < $n; $i++){
        echo "a[".$i."] = ";
        $val = trim(fgets(STDIN, 4096));
        $a[$i] = $val;
    }

    for($i = 0; $i < 2 * $n; $i++){
        $idx1 = mt_rand(0, $n-1);
        $idx2 = mt_rand(0, $n-1);
        $t = $a[$idx1];
        $a[$idx1] = $a[$idx2];
        $a[$idx2] = $t;
    }
    echo "要素をかき混ぜました。\n";
    for($i = 0; $i < $n; $i++){
        echo "a[".$i."] = ".$a[$i].PHP_EOL;
    }

    //シャッフル→二つの要素を適当に選んで値をひたすら交換する

    