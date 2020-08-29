<?php
    do {
        echo "要素数：";
        $n = (int)trim(fgets(STDIN,4096));
    } while ($n <= 0);

    for($i = 0; $i < $n; $i++){
        echo "x[".$i."]：";
        $x[$i] = trim(fgets(STDIN,4096));
    }
    echo "探す値：";
    $search = trim(fgets(STDIN,4096));
    $idxTop = linerSearch($x, $search); 
    $idxBot = linerSearchR($x, $search); 
    if($idxTop == -1){
        echo "その値の要素は存在しません。";
    } elseif ($idxTop == $idxBot){
        echo "その値はx[".$idxTop."]にあります。\n";
    } else {
        echo "その値の要素は複数存在します。";
        echo "最も先頭のものはx[".$idxTop ."]にあります。\n";
        echo "最も末尾のものはx[".$idxBot."]にあります。\n";

    }

    function linerSearch($a, $key){
        for($i = 0; $i < count($a); $i++){
            if($a[$i] == $key){
                return $i;
            } 
        }
        return -1;
    }

    function linerSearchR($a, $key){
        for($i = count($a) - 1; $i >= 0; $i--){
            if($a[$i] == $key){
                return $i;
            }
        }
        return -1;
    }

    //array_searchでもよいかなと思ったけれど先頭と末尾から走査しないといけないのでやめた
    //関数内のreturnを返す位置を間違えて進まなかった30分以上悩んでた……