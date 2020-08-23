<?php
    echo "英語の月名を入力してください。\nなお、先頭は大文字で、２文字目以降は小文字とします。\n";
    $test = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    $last = -1;
    do{
        do{
            $month = mt_rand(1, 12);
        } while ($last === $month);
        $last = $month;
        while (true){
            echo $month."月：";
            $ans = trim(fgets(STDIN, 4096));

            if($ans == $test[$month - 1]){
                break;
            } else {
               echo "違います。";
            }
        }
        echo "正解です。もう一度？1…Yes / 0…No：";
        $loop = (int)trim(fgets(STDIN, 4096));
        
    } while ($loop === 1);

    //ループの構造ちょっと間違えたなぁ
    //lastを定義すればいいのか11や12みたいなの書かないといけないのかなと思っていた