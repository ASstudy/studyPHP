<?php
    echo "点数：";
    $input = null;
    $input = trim(fgets(STDIN, 4096));

    if($input <= 100 && $input >= 0){
        if(100 >= $input && $input >= 80){
            echo "優";
        } elseif (80 > $input && $input >= 70){
            echo "良";
        } elseif (70 > $input && $input >= 60){
            echo "可";
        } elseif (60 > $input){
            echo "不可";
        }
    } else {
        echo "不正な点数です。";
    }