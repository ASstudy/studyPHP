<?php
    do {
        echo "xの値：";
        $x = (int)trim(fgets(STDIN,4096));
        echo "yの値：";
        $y = (int)trim(fgets(STDIN,4096));
        echo "zの値：";
        $z = (int)trim(fgets(STDIN,4096));
    } while ($x <= 0 || $y <= 0 || $z <= 0);

    do {
        echo "配列aの要素数：";
        $n = (int)trim(fgets(STDIN,4096));
    } while ($n <= 0);

    for($i = 0; $i < $n; $i++){
        echo "a[".$i."]：";
        $a[$i] = trim(fgets(STDIN,4096));
    }

    
    

    echo "x, yの最小値は".min($x, $y)."です。\n";
    echo "x, y, zの最小値は".min($x, $y, $z)."です。\n";
    echo "配列aの最小値は".min($a)."です。\n";


    //オ-バーロードはサポートされていないらしいので分岐させるしかないみたい→中身が一緒じゃないと可変長でもどうにもできないかも……
    //min自体はPHPのほうで存在するメソッドなのでこれは多重定義も何もあったものじゃないけれど……
    //時間があったら分岐で解きなおします