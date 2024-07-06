<?php
    // câu lệnh if
    $a = 4;
    $b = 2;
    if ($a > $b) {
        echo "a lớn hơn b <br>";
    } else if ($a < $b) {
        echo "a nhỏ hơn b <br>";
    } else {
        echo "a bằng b <br>";
    }
    // Vòng lặp for
    for ($i = 0; $i < 10; $i++) {
        echo "$i <br>";
    }
    // Vòng lặp foreach
    $array = [1, 2, 3, 4, 5];
    foreach ($array as $value) {
        echo $value . "<br>";
    }
    // Cấu trúc switch
    $x = 2;
    switch ($x) {
        case 1:
            echo "x bằng 1";
            break;
        case 2:
            echo "x bằng 2";
            break;
        default:
            echo "x là một số khác 1 và 2";
    }
?>