<?php
    echo "正の整数値の桁数を求めます。\n";
do {
    echo "正の整数値：";
    $num = (int)trim(fgets(STDIN,4096));
} while ($num <= 0);

$count = 0;
while ($num > 0){
    $count++;
    $num = intdiv($num, 10);
    
}
echo "その数は".$count."桁です。";

//最後の計算がdoubleになって割り切れるからループがまわってるんだろうなぁという印象
//調べたらバージョン7からintdivという関数が増えたらしい。これで解決
