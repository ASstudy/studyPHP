<?php
    function addMatrix($x, $y, $z){
        if(count($x) != count($y) || count($y) != count($z)){
            return false;
        }
        for($i = 0; $i < count($x); $i++){
            if(count($x[$i]) != count($y[$i]) || count($y[$i]) != count($z[$i])){
                return false;
            }
        }
        for($i = 0; $i < count($x); $i++){
            for($j = 0; $j < count($x[$i]); $j++){
                $z[$i][$j] = $x[$i][$j] + $y[$i][$j];
            }
            
        }
        return true; 
    }

    function printMatrix($m){
        for($i = 0; $i < count($m); $i++){
            for($j = 0; $j < count($m[$i]); $j++){
                echo $m[$i][$j]." ";
            }
            echo "\n";
        }
    }
    $a = array(array(1, 2, 3), array(4, 5, 6));
    $b = array(array(6, 3, 4), array(5, 1, 2));
    //仮引数渡して初期化ができないので2つ初期化した配列作って渡すしか……？
    $c1 = array_fill (0, 3, 0);
    $c2 = array_fill (0, 3, 0);
    $c = array($c1, $c2);

    if(addMatrix($a, $b, $c)){
        echo "　行列a\n";
        printMatrix($a);
        echo "\n行列b\n";
        printMatrix($b);
        echo "\n行列c\n";
        var_dump(addMatrix($a, $b, $c));
        printMatrix($c);
    }
    

    //返す値をreturnにすると計算した結果がうまく戻ってこなくって、$cはそのままの設定が入るんだよな……？
    //仕様の問題か？