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
            echo "a[".$i."][".$j."]：";
            $a[$i][$j] = trim(fgets(STDIN,4096));
        } 
    }
    for($i = 0; $i < $l; $i++){
        for($j = 0; $j < $r; $j++){
            echo "b[".$i."][".$j."]：";
            $b[$i][$j] = trim(fgets(STDIN,4096));
        } 
    }
    //仮引数渡して初期化ができないので2つ初期化した配列作って渡すしか……？
    // for($i = 0; $i < $l; $i++){
    //     for($j = 0; $j < $r; $j++){
    //         $c."$i"
    //     } 
    // }
    // $c1 = array_fill (0, 3, 0);
    // $c2 = array_fill (0, 3, 0);
    // $c = array($c1, $c2);

    if(addMatrix($a, $b)){
        echo "　行列a\n";
        printMatrix($a);
        echo "\n行列b\n";
        printMatrix($b);
        echo "\n行列c\n";
        printMatrix(addMatrix($a, $b));
    }
    function addMatrix($x, $y){
        for($i = 0; $i < count($x); $i++){
            for($j = 0; $j < count($x[$i]); $j++){
                $z[$i][$j] = $x[$i][$j] + $y[$i][$j];
            }
            
        }
        return $z; 
    }

    function printMatrix($m){
        for($i = 0; $i < count($m); $i++){
            for($j = 0; $j < count($m[$i]); $j++){
                echo $m[$i][$j]." ";
            }
            echo "\n";
        }
    }

    //返す値がそもそもうまく入ってなかった……