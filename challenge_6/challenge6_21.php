<?php
    echo "クラス数：";
    $c = (int)trim(fgets(STDIN,4096));
    $classS = array_fill(0, $c, 0);
    $totalS = 0;
    $student = 0;
    for($i = 0; $i < $c; $i++){
        
        
        echo ($i + 1)."組の人数：";
        $n[$i] = (int)trim(fgets(STDIN,4096));
        $student += $n[$i];
        for($j = 0; $j < $n[$i]; $j++){
            echo ($i + 1)."組".($j + 1)."番の点数：";
            $score[$i][$j] = (int)trim(fgets(STDIN,4096));
            $classS[$i] += $score[$i][$j];
        }
        $totalS += $classS[$i];
    }

    echo "　組 |　　合計　　平均\n";
    echo "----------------------\n";
    for($i = 0; $i < $c; $i++){
        echo ($i+1)."組 |　　".$classS[$i]."　　".number_format($classS[$i]/$n[$i], 2)."\n";   
    }
    echo "----------------------\n";
    echo "　計 |　　".$totalS."　　".number_format($totalS/$student, 2);

    //詰まったらdumpしないとだめだわ……見てても何もわからん……