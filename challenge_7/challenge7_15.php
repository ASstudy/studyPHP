<?php
    echo "要素数：";
    $n = (int)trim(fgets(STDIN, 4096));
    $x = array_fill(0, $n, []);
    for($i = 0; $i < $n; $i++){
        echo "x[".$i."]：";
        $x[$i] = trim(fgets(STDIN, 4096));
    }
    echo "全要素の合計は".sumOf($x)."です。";


    function sumOf($array){
        $sum = array_sum($array);
        return $sum;
    }
    