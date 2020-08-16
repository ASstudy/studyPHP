<?php
    echo "3個の乱数を生成しました。\n";
    $a = mt_rand() / mt_getrandmax() * 1.0;
    $b = mt_rand() / mt_getrandmax() * 10.0;
    $c = -1.0 + mt_rand() / mt_getrandmax() * (1.0-(-1.0));
    echo "0.0以上 1.0未満：".$a."\n";
    echo "0.0以上 10.0未満：".$b."\n";
    echo "-1.0以上 1.0未満：".$c;

    //JavaみたいにRandomクラスのメソッドがあるわけではなさそう？

   