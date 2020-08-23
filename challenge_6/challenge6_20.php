<?php
    echo "凸凹の２次元配列を作ります。\n";
    echo "行数：";
    $l = (int)trim(fgets(STDIN, 4096));
    for($i = 0; $i < $l; $i++){
        echo $i."行目の列数：";
        $n[$i] = (int)trim(fgets(STDIN, 4096));
    }

    echo "各要素の値を入力せよ。\n";
    for($i = 0; $i < $l; $i++){
        for($j = 0; $j < $n[$i]; $j++){
            echo "c[".$i."][".$j."]：";
            $c[$i][$j] = (int)trim(fgets(STDIN, 4096)); 
        }
    }

    echo "配列cの各要素の値は次のようになっています。\n";
    for($i = 0; $i < $l; $i++){
        for($j = 0; $j < $n[$i]; $j++){
            echo "　".$c[$i][$j]."　";
        }
        echo "\n";
    }

    //このあたりやっぱり時間がかかる……
    //腹落ちするまでにはまだまだかかりそう