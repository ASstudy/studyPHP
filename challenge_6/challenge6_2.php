<?php
    $arr = array_fill(0, 5, []);

    for($i = 0; $i < count($arr); $i++){
        $arr[$i] = 5 - $i;
    }

    for($i = 0; $i < count($arr); $i++){
        echo "a[".$i."] = ".$arr[$i].PHP_EOL;
    }

    //6-5とテーマが被るので修正
    //空で作ってから代入するように



    