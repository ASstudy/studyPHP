<?php
    echo "球の表面積と体積を求めます。\n";
    echo "半径：";
    $r = trim(fgets(STDIN,4096));
    $pi = 3.14;
    $S = 4 * $pi * $r ** 2;
    $V = 4 / 3 * $pi * $r ** 3;
    echo "表面積は".$S."です。\n";
    echo "体　積は".$V."です。";

    //公式をググったついでに累乗もググりました。pow(2, 3)とかでも書けそう