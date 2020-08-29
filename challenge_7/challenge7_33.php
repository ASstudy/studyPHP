<?php
    do {
        echo "１次元配列xの要素数：";
        $n = (int)trim(fgets(STDIN,4096));
    } while ($n <= 0);

    for($i = 0; $i < $n; $i++){
        echo "x[".$i."]：";
        $x[$i] = trim(fgets(STDIN,4096));
    }

    do {
        echo "２次元配列yの行数：";
        $l = (int)trim(fgets(STDIN,4096));
    } while ($l <= 0);
    for($i = 0 ; $i < $l; $i++){
        echo $i."行目の列数：";
        $r[$i] = (int)trim(fgets(STDIN,4096));
    }
    echo "各要素の値を入力せよ\n";
    for($i = 0; $i < $l; $i++){
        for($j = 0; $j < $r[$i]; $j++){
            echo "y[".$i."][".$j."]：";
            $y[$i][$j] = trim(fgets(STDIN,4096));
        } 
    }

    function printArrayX($x){
        for($i = 0; $i < count($x)-1; $i++){
            echo sprintf("%3s", $x[$i]);
        }
        echo sprintf("%3s", $x[count($x)-1]);
        echo "\n";
    }

    function printArrayY($y){
        for($i = 0; $i < count($y); $i++){
            for($j = 0; $j < count($y[$i])-1; $j++){
                echo sprintf("%3s", $y[$i][$j]);
            }
            echo sprintf("%3s",$y[$i][count($y[$i]) - 1])."\n";
        }
    }


     echo "１次元配列x：\n";
     printArrayX($x);

     echo "\n２次元配列y：\n";
     printArrayY($y);




//多重定義はこの場合中身が完全に異なるので無理なような気がしました……
//普通に別名のメソッドでやります
//桁数の差を求める配列周りdumpで出力してもうまいこと動いている気配が微塵もなかったので諦めました
