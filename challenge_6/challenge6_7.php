<?php
    echo "人数：";
    $n = (int)trim(fgets(STDIN, 4096));
    echo "点数を入力せよ。\n";

    $sum = 0;
    for($i = 1; $i <= $n; $i++){
        echo $i."番の点数：";
        $score = (int)trim(fgets(STDIN, 4096));
        $test[$i] = $score;
        $sum += $score;
    }

    echo "合計点は".$sum."です。\n";
    echo "平均点は".number_format($sum/$n, 2)."です。\n";
    echo "最高点は".max($test)."です。\n";
    echo "最低点は".min($test)."です。\n";

    //関数に最大最小を一発で求めてくれるのがあったのでそれを使用