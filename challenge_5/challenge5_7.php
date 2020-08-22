<?php
    (int)$a = (int)10.0;
    (int)$b = (double)10.0;

    echo "a = ".$a.PHP_EOL;
    echo "b = ".$b;

    //勝手に変換されるんだよなぁ……言語仕様の差