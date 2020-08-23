<?php
    echo "要素数：";
    $n = (int)trim(fgets(STDIN, 4096));
    $sum = 0;
    for($i = 0; $i < $n; $i++){
        echo "a[".$i."] = ";
        $val = trim(fgets(STDIN, 4096));
        $a[$i] = $val;
    }
    echo "全要素の合計は".array_sum($a)."です。\n";
    echo "全要素の平均は".number_format(array_sum($a) / $n, 2)."です。";

    //拡張forを使うところだったらしい
