<?php
    echo "変数a：";
    $a = null;
    $a = trim(fgets(STDIN, 4096));
    echo "変数b：";
    $b = null;
    $b = trim(fgets(STDIN, 4096));

    $c = null;

    if($a < $b){
        $c = $a;
        $a = $b;
        $b = $c;
    } 
    
    echo "a≧bとなるようにソートしました。\n";
    echo "変数aは".$a."です。\n";
    echo "変数bは".$b."です。";

    
    
    