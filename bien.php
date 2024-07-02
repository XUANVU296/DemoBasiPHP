<?php
    $age = 18;
    $arrayAge = ['Nam'=>'8','Hùng'=>'15','Ngọc'=>'20','Thảo'=>'17','Vũ'=>'18','Mơ'=>'9','Vy'=>'30','Tâm'=>'11'];
    function Kiemtratuoi($age, $arrayAge) {
        $dutuoi = 0;
        $chuadutuoi = 0;
     foreach ($arrayAge as $name => $personAge) {
            if ($personAge >= $age) {
                $dutuoi++;
                echo "Xin chào $name, bạn đến với công ty của chúng tôi<br>";
            } else {
                $chuadutuoi++;
                echo "Xin lỗi $name, vui lòng thử lại sau<br>";
            }
        }
        echo "<br>Tổng nhân viên đủ tuổi để vào công ty là $dutuoi<br>";
        echo "Tông nhân vin chưa đủ tuổi để vào công ty là $chuadutuoi<br>";
    }
    Kiemtratuoi($age, $arrayAge);
?>