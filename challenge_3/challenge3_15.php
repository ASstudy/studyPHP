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

    $min = null;
    $min = $a > $b ? $b : $a;
    $min = $min > $c ? $c : $min;

    
    echo "最小値は".$min."です。";
    