<?php
    $a = 6;
    $b = 3;
    // phép cộng
    $c = $a + $b;
    // phép trừ
    $d = $a - $b;
    // phép chia
    $e = $a / ( $b + $d);
    // phép nhân
    $f = $b * $d;
    // phép chia lấy số dư
    $g = $f % $b;
    // phép toán so sánh
    if (($a > $c) || ($e < $b)) {
        $h = $a + $b + $c +$d;
    }
    echo " Tổng là $c <br>";
    echo " Hiệu là $d <br>";
    echo " Thương là $e <br>";
    echo " Tích là $f <br>";
    echo " Dư $g <br>";
    echo " H bằng $h <br>";
?>