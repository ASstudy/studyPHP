<?php
    function readPlusInt(){
        do{
            echo "正の整数値："; 
            $n = (int)trim(fgets(STDIN, 4096));
            $rev = implode(array_reverse(str_split($n)));
        } while (0 >= $n);
        return $rev;
    }

    do{
        echo "逆から読むと".readPlusInt()."です。";
     do{
        echo "もう一度？<Yes…1 / No…0>";
        $loop = (int)trim(fgets(STDIN, 4096));
     } while ($loop != 0 && $loop != 1);
        
    } while ($loop === 1);
     

    //割り算して..の間で１文字ずつ表示させるのがうまくいかなかったので配列使いました
       
        

