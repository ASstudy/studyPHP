<?php
    echo "整数値xとyとzの平均値を求めます。\n";
    echo "xの値：";
    $x = (int)trim(fgets(STDIN,4096));
    echo "yの値：";
    $y = (int)trim(fgets(STDIN,4096));
    echo "zの値：";
    $z = (int)trim(fgets(STDIN,4096));

    $sum = $x + $y + $z;
    $aveD = (double)$sum / 3;
    $aveI = intdiv($sum, 3);

    echo "xとyとzの平均値は".number_format($aveD, 3)."です。\n";
    echo "xとyとzの平均値は".$aveI."です。\n";

    //キャストをしようがしまいが同じ結果なんだよなぁ……