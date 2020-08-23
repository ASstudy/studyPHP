<?php
    $arr = array_fill(0, 5, []);
    var_dump($arr);
    for($i = 0; $i < count($arr); $i++){
        $arr[$i] = 1.1*($i+1);
    }

    for($i = 0; $i < count($arr); $i++){
        echo "a[".$i."] = ".$arr[$i].PHP_EOL;
    }

  

    