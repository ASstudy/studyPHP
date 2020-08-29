<?php
    
    echo "int　　型整数aの値：";
    $a = (int)trim(fgets(STDIN,4096));
    // echo "long　 型整数bの値：";
    // $b = (long)trim(fgets(STDIN,4096));
    //long型がない？
    echo "float　型整数cの値：";
    $c = (float)trim(fgets(STDIN,4096));
    echo "double　型整数dの値：";
    $d = (double)trim(fgets(STDIN,4096));



    function absolute($num){
        return $num >= 0 ? $num : -$num;
    }

    echo "aの絶対値は".absolute($a)."です。\n";
    echo "cの絶対値は".absolute($c)."です。\n";
    echo "dの絶対値は".absolute($d)."です。\n";
    

    //オ-バーロードはサポートされていないらしいので分岐させるしかないみたい→中身が一緒じゃないと可変長でもどうにもできないかも……
    //でもこれ1つしか値渡さないので問題なかったわ
