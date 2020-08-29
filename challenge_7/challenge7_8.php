<?php
    echo "乱数を生成します。\n";
    echo "下限値：";
    $b = (int)trim(fgets(STDIN, 4096));
    echo "上限値：";
    $t = (int)trim(fgets(STDIN, 4096));
    echo "生成した乱数は".random($b, $t)."です。";

    function random($b, $t){
        //~より小さいなのにイコールつけてていいのか？
        // if($t <= $b){
        if($t < $b){
            return $b;
        } else {
           $rand = mt_rand($b, $t);
           return $rand;
        }
    }

    //標準ライブラリメソッド……普段使ってる関数のことか？