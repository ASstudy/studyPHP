<?php
    echo "行列aの要素の値を入力せよ。\n";
    for($i = 0; $i < 4; $i++){
        for($j = 0; $j < 3; $j++){
            echo "a[".$i."][".$j."]：";
            $a[$i][$j] = trim(fgets(STDIN, 4096));
        }
    }
    echo "行列bの要素の値を入力せよ。\n";
    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 4; $j++){
            echo "b[".$i."][".$j."]：";
            $b[$i][$j] = trim(fgets(STDIN, 4096));
        }
    }
    for($i = 0; $i < 4; $i++){
        for($j = 0; $j < 4; $j++){
            $c[$i][$j] = 0;
            for($k = 0; $k < 3; $k++){
                $c[$i][$j] += $a[$i][$k] * $b[$k][$j];
            }
        }
    }
    echo "行列aとbの積\n";
    for($i = 0; $i < 4; $i++){
        for($j = 0; $j < 4; $j++){
            echo sprintf("%5s", $c[$i][$j]);
        }
        echo "\n";
    }

    //うわ記憶のかなたにある行列……
    //やっぱり数学復習しないとだめか……？