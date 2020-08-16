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

    $med = null;
    if($a >= $b){
        if($b >= $c){
            $med = $b;
        } elseif ($c >= $a){
            $med = $a;
        } else {
            $med = $c;
        }
    } elseif ($a > $c){
        $med = $a;
    } elseif ($b > $c){
        $med = $c;
    } else {
        $med = $b;
    }

    
    echo "中央値は".$med."です。";

    //そもそもの中央値があやしく……
    