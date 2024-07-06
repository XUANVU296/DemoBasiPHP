<?php
    // Khai báo mảng chứa các số nguyên
    $numbers = array(1, 2, 3, 4, 5);
    // Truy cập và in ra giá trị của phần tử trong mảng
    echo "$numbers[0] . <br>";
    echo "$numbers[2] .  <br>";
    // Duyệt qua mảng và in ra tất cả các phần tử
    foreach ($numbers as $number) {
        echo $number . " ";
    }
?>