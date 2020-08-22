<?php
    $b1 = true;
    $b2 = false;
    $b1 = var_export( $b1, true );
    $b2 = var_export( $b2, true );
    

    echo "b1 = ".$b1.PHP_EOL;
    echo "b2 = ".$b2.PHP_EOL;

    //直接は出力できないらしく……
    //参考：https://chaika.hatenablog.com/entry/2017/08/16/090000