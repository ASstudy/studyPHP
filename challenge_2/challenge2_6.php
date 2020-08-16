<?php
    $input = null;
    echo "整数値：";
    $input = trim(fgets(STDIN,4096));
    $sum = (int)$input + 10;
    $sub = (int)$input - 10;

    echo "10を加えた値は".$sum."です。\n";
    echo "10を減じた値は".$sub."です。";

    //いちいちecho使わないでも改行できた……？
    //昨日はクロームで表示してたから改行がうまくいかなかったのか？