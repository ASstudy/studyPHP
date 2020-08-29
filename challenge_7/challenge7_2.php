<?php
    echo "整数a：";
    $a = (int)trim(fgets(STDIN,4096));
    echo "整数b：";
    $b = (int)trim(fgets(STDIN,4096));
    echo "整数c：";
    $c = (int)trim(fgets(STDIN,4096));
    echo "最小値は".min3($a, $b, $c)."です。";

    function min3($x, $y, $z){
        $min = [$x, $y, $z];
        $m = min($min);
        return $m; 
    }

    //入れ替えるやり方書くのが面倒だったのでメソッドのある配列にお世話になりました。
    //メソッドと名前がかぶったので名称変更しています