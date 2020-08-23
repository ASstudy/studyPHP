<?php

    echo "要素数：";
    $n = (int)trim(fgets(STDIN, 4096));
    for($i = 0; $i < $n; $i++){
        echo "a[".$i."] = ";
        $val = trim(fgets(STDIN, 4096));
        $a[$i] = $val;
    }

    for($i = 0; $i < $n; $i++){
        $b[$n-$i-1] = $a[$i];
    }
    echo "aの全要素を逆順にbにコピーしました。\n";
    for($i = 0; $i < $n; $i++){
        echo "b[".$i."] = ".$b[$i].PHP_EOL;
    }


    