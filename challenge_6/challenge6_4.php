<?php
    echo "要素数：";
    $n = (int)trim(fgets(STDIN, 4096));
    for($i = 0; $i < $n; $i++){
        $star[$i] = mt_rand(1, 10);
    }
    for($i = 10; $i >= 1; $i--){
        for($j = 0; $j < $n; $j++){
            if($star[$j] >= $i){
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
    
    for($i = 0 ; $i < 2 * $n; $i++){
            echo "-";
    }
    echo "\n";
    for($i = 0 ; $i < $n; $i++){
            echo ($i % 10)." ";
    }

    //仕切り線の数もきちんと計算で出せるんだ……

    