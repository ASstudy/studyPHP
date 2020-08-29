<?php
do {
    echo "人数は：";
    $n = (int)trim(fgets(STDIN,4096));
} while ($n <= 0);

for($i = 0; $i < $n; $i++){
    echo ($i + 1)."番目の身長";
    $height[$i] = trim(fgets(STDIN,4096));
    echo ($i + 1)."番目の体重";
    $weight[$i] = trim(fgets(STDIN,4096));
}
echo "最も背が低い人の身長：".minOf($height)."cm\n";
echo "最も痩せている人の体重：".minOf($weight)."kg";

function minOf($a){
    $min = min($a);
    return $min;
}
    
