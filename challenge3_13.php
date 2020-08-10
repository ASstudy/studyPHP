<?php
    echo "整数a：";
    $a = null;
    $a = (int)trim(fgets(STDIN, 4096));
    echo "整数b：";
    $b = null;
    $b = (int)trim(fgets(STDIN, 4096));

    $diff = null;
    // if($a > $b){
    //     $diff = $a - $b;
    // } else {
    //     $diff = $b - $a;
    // }
    //a>bがtrueなら?より後ろ左が代入。falseなら右が代入。
    $diff = $a > $b ? $a - $b : $b - $a;

    echo "それらの差は".$diff."です。";