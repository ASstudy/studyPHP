<?php
    $arr = array_fill(0, 5, []);
    // $arr = array(0, 0, 0, 0, 0);

    for($i = 0; $i < count($arr); $i++){
        $arr[$i] = 0;
    }

    for($i = 0; $i < count($arr); $i++){
        echo "a[".$i."] = ".$arr[$i].PHP_EOL;
    }


    //php配列をnewしたら0で生成するとかの機能はないのでは……？
    //空の配列を $arr = array_fill(0, 5, []);とかで作れるっぽいけど？
    //0を別に代入しないとエラー吐かれるな……
    //このケースに関しては直接値を詰めたほうが早そう