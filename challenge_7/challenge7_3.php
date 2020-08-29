<?php
    echo "整数a：";
    $a = (int)trim(fgets(STDIN,4096));
    echo "整数b：";
    $b = (int)trim(fgets(STDIN,4096));
    echo "整数c：";
    $c = (int)trim(fgets(STDIN,4096));
    echo "中央値は".med($a, $b, $c)."です。";

    function med($x, $y, $z){
        $m = 0;
        if($x >= $y){
            if($y >= $z){
                $m = $y;
            } elseif ($x <= $z) {
                $m = $x;
            } else {
                $m = $z;
            }
        } elseif ($x > $z) {
            $m = $x;
        } elseif($y > $z){
            $m = $z;
        } else {
            $m = $y;
        }
        return $m; 
    }

    //中央値の求め方をまた失念しました……
    