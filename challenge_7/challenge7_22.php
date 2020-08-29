<?php
     do {
        echo "要素数：";
        $n = (int)trim(fgets(STDIN,4096));
    } while ($n <= 0);

    for($i = 0; $i < $n; $i++){
        echo "x[".$i."]：";
        $x[$i] = trim(fgets(STDIN,4096));
    }
    
    $y = aryClone($x);

    echo "配列xの複製yを作成しました。\n";
    for($i = 0; $i < $n; $i++){
        echo "y[".$i."] =".$y[$i]."\n";
    }


    function aryClone($x){
        $y = [];
        for($i = 0; $i < count($x); $i++){
            $y[$i] = $x[$i];
        }
        return $y;
    }

    //メソッドうまく受け取れてなかった