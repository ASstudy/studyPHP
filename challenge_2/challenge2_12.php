<?php
    $input = null;
    echo "整数値：";
    $input = trim(fgets(STDIN,4096));
    echo "その値の±5の乱数を生成しました。\n";
    $a = mt_rand(-5, 5) + $input;
    echo "値は".$a."です。";


   