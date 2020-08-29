<?php
    do {
        echo "要素数：";
        $n = (int)trim(fgets(STDIN,4096));
    } while ($n <= 0);

    for($i = 0; $i < $n; $i++){
        echo "x[".$i."]：";
        $x[$i] = trim(fgets(STDIN,4096));
    }
    echo "削除する要素のインデックス：";
    $del = trim(fgets(STDIN,4096));
    $idx = arrayRmvOf($x, $del);
    var_dump($idx);
    for($i = 0; $i < count($idx); $i++){
        echo "y[".$i."]：".$idx[$i]."\n";
    }

    function arrayRmvOf($x, $del){
        array_merge(array_splice($x, $del, 1));

        return $x;
    }

    //何が戻ってくるのか要注意