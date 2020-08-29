<?php
    echo "整数x：";
    $x = (int)trim(fgets(STDIN,4096));
    echo "signOf(x)は".signOf($x)."です。";

    function signOf($n){
        if($n < 0){
            return -1;
        }else if($n === 0){
            return 0;
        }else{
            return 1;
        }
    }