<?php
     do {
        echo "行列の行数：";
        $l = (int)trim(fgets(STDIN,4096));
    } while ($l <= 0);
    do {
        echo "行列の列数：";
        $r = (int)trim(fgets(STDIN,4096));
    } while ($r <= 0);

    for($i = 0; $i < $l; $i++){
        for($j = 0; $j < $r; $j++){
            echo "x[".$i."][".$j."]：";
            $x[$i][$j] = trim(fgets(STDIN,4096));
        } 
    }
    
    $y = aryClone2($x);

    echo "配列xの複製yを作成しました。\n";
    for($i = 0; $i < $l; $i++){
        for($j = 0; $j < $r; $j++){
            echo "y[".$i."][".$j."] = ".$y[$i][$j]."\n";
        } 
    }


    function aryClone2($x){
        $y = [];
        for($i = 0; $i < count($x); $i++){
            $y[$i] = $x[$i];
        }
        return $y;
    }
