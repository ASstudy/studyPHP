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
    //ｘを挿入できればよくって別に配列を返却する必要はなかったらしい

