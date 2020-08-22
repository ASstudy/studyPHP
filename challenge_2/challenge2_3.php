<?php
    $x = 11.3;
    $y = 32.421;
    $total = 0;
    $ave = 0;
    $total = $x + $y;
    $ave = $total / 2;
    echo "xの値は".$x."です";
    echo "\n";
    echo "yの値は".$y."です";
    echo "\n";
    echo "合計は".$total."です";
    echo "\n";
    echo "平均は".$ave."です";

    //Javaと違って厳密な型の定義が必要ないために、計算できてしまう。
    //一方で7.4系統から型の強制が可能になったらしい
    //https://qiita.com/rana_kualu/items/9b4502d229d19635ef34