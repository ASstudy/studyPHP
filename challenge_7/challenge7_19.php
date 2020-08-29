<?php
    do {
        echo "要素数：";
        $n = (int)trim(fgets(STDIN,4096));
    } while ($n <= 0);

    for($i = 0; $i < $n; $i++){
        echo "x[".$i."]：";
        $a[$i] = trim(fgets(STDIN,4096));
    }
    echo "削除する開始インデックス：";
    $del = trim(fgets(STDIN,4096));
    echo "削除する要素の個数：";
    $num = trim(fgets(STDIN,4096));
    $ans = aryRmvN($a, $del, $num);
    for($i = 0; $i < count($ans); $i++){
        echo "x[".$i."] =".$ans[$i]."\n";
    }


    function aryRmvN($a, $del, $num){
        for($i = $del; $i < $del + $num; $i++){
            unset($a[$i]);
        }
        $rmv = array_values($a);
        return $rmv;
    }

    //配列を返却する必要はなかったらしい