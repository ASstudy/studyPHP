<?php
    echo "整数a：";
    $a = null;
    $a = (int)trim(fgets(STDIN, 4096));
    echo "整数b：";
    $b = null;
    $b = (int)trim(fgets(STDIN, 4096));

    $min = null;
    $max = null;
if($a !== $b) {
    if($a > $b){
        $min = $b;
        $max = $a;
    } else {
        $min = $a;
        $max = $b;
    }
    echo "小さいほうの値は".$min."です。\n";
    echo "大きいほうの値は".$max."です。";
} else {
    echo "二つの値は同じです。";
}
    

    
    
    