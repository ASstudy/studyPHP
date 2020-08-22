<?php
    echo "季節を求めます。\n";
    do {
        do {
            echo "何月ですか：";
            $month = trim(fgets(STDIN, 4096));
        } while ($month < 1 || $month > 12);
        //switch
        switch ($month){
        case 1: echo "それは冬です。"; break;
        case 2: echo "それは冬です。"; break;
        case 3: echo "それは春です。"; break;
        case 4: echo "それは春です。"; break;
        case 5: echo "それは春です。"; break;
        case 6: echo "それは夏です。"; break;
        case 7: echo "それは夏です。"; break;
        case 8: echo "それは夏です。"; break;
        case 9: echo "それは秋です。"; break;
        case 10: echo "それは秋です。"; break;
        case 11: echo "それは秋です。"; break;
        case 12: echo "それは冬です。"; break;
    }
    echo "\nもう一度？ 1…Yes / 0…No：";
    $replay = (int)trim(fgets(STDIN, 4096));
    } while ($replay === 1);
    
    //厳密に比較してるからintつけないとだめ
    


