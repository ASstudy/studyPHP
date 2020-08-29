<?php
    do {
        echo "要素数：";
        $n = (int)trim(fgets(STDIN,4096));
    } while ($n <= 0);

    for($i = 0; $i < $n; $i++){
        echo "x[".$i."]：";
        $a[$i] = trim(fgets(STDIN,4096));
    }
    echo "挿入する要素のインデックス：";
    $add = trim(fgets(STDIN,4096));
    echo "挿入する値：";
    $print = trim(fgets(STDIN,4096));
    $ans = aryIns($a, $add, $print);
    for($i = 0; $i < count($ans); $i++){
        echo "x[".$i."] =".$ans[$i]."\n";
    }


    function aryIns($a, $add, $print){
        array_splice($a, $add, 0, $print);
        return $a;
    }

    //戻り値！お前！お前！！！！別の変数作ってうんうんと頭抱えてた
    //7-20で実装済みでしたね……7-20配列を返却しなくていいからなんかだぶる値があったのか……仕様の問題だと思っていた……

