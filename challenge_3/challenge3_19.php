<?php
    echo "整数a：";
    $a = null;
    $a = (int)trim(fgets(STDIN, 4096));
    echo "整数b：";
    $b = null;
    $b = (int)trim(fgets(STDIN, 4096));
    echo "整数c：";
    $c = null;
    $c = (int)trim(fgets(STDIN, 4096));

    $t = null;
    if($a > $b){
        $t = $a;
        $a = $b;
        $b = $t;
    }
    if($b > $c){
        $t = $b;
        $b = $c;
        $c = $t;
    }
    if($a > $b){
        $t = $a;
        $a = $b;
        $b = $t;
    }
    
    echo "a≦b≦cとなるようにソートしました。\n";
    echo "変数aは".$a."です。\n";
    echo "変数bは".$b."です。\n";
    echo "変数cは".$c."です。";

    