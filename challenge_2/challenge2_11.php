<?php
    echo "3個の乱数を生成しました。\n";
    $a = mt_rand(1, 9);
    $b = mt_rand(-9, -1);
    $c = mt_rand(10, 99);
    echo "１桁の正の整数：".$a."\n";
    echo "１桁の負の整数：".$b."\n";
    echo "２桁の正の整数：".$c;

   