<?php
    $x = null;
    $y = null;
    $sum = 0;
    $ave = 0;
    echo "xの値：";
    $x = trim(fgets(STDIN,4096));
    echo "yの値：";
    $y = trim(fgets(STDIN,4096));
    $sum = $x + $y;
    $ave = $sum / 2;
    echo "合計は".$sum."です。\n";
    echo "平均は".$ave."です。";
    