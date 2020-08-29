<?php
    do {
        echo "要素数：";
        $n = (int)trim(fgets(STDIN,4096));
    } while ($n <= 0);

    for($i = 0; $i < $n; $i++){
        echo "x[".$i."]：";
        $a[$i] = trim(fgets(STDIN,4096));
    }
    echo "削除する要素のインデックス：";
    $del = trim(fgets(STDIN,4096));
    $ans = aryRmv($a, $del);
    for($i = 0; $i < count($ans); $i++){
        echo "x[".$i."] =".$ans[$i]."\n";
    }


    function aryRmv($a, $del){
        unset($a[$del]);
        $rmv = array_merge($a);
        return $rmv;
    }

    //array_spliceでも上記記述でもエラー吐かれて何で！？！？してたら最終行の表示のところのループな……
    //ないところまで回そうとしても何も表示されませんわ……