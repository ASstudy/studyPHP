<?php
    echo "変数xはfloat型で、変数yはdouble型です。\n";
    echo "x :";
    $x = (float)trim(fgets(STDIN, 4096));
    echo "y :";
    $y = (double)trim(fgets(STDIN, 4096));

    echo "x = ".$x."\n";
    echo "y = ".$y."\n";

    //言語仕様的に同じになってしまうのか……？
    //(float), (double), (real) - float へのキャスト