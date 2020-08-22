<?php
//     echo "左下直角の二等辺三角形を表示します。\n段数は：";
//     $num = (int)trim(fgets(STDIN,4096));

//     for($i=0; $i < $num; $i++){
//         for($j = 0; $j < $i; $j++){
//         echo "*";
//     }
//     echo "\n";
// } 

// echo "左上直角の二等辺三角形を表示します。\n段数は：";
//     $num = (int)trim(fgets(STDIN,4096));

//     for($i=0; $i < $num; $i++){
//         for($j = 0; $j < $num - $i; $j++){
//         echo "*";
//     }
//     echo "\n";
// } 

// echo "右下直角の二等辺三角形を表示します。\n段数は：";
//     $num = (int)trim(fgets(STDIN,4096));

//     for($i=0; $i < $num; $i++){
//         for($j = 0; $j < $num - $i - 1; $j++){
//             echo " ";
//         }
//         for($j = 0; $j < $i + 1; $j++){
//             echo "*";
//         }
//     echo "\n";
// } 

echo "右上直角の二等辺三角形を表示します。\n段数は：";
    $num = (int)trim(fgets(STDIN,4096));

    for($i=0; $i < $num; $i++){
        for($j = 0; $j < $i; $j++){
            echo " ";
        }
        for($j = 0; $j < $num - $i ; $j++){
            echo "*";
        }
    echo "\n";
} 

//このあたりを考えるの非常に苦手……



