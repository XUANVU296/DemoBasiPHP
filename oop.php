<?php
    abstract class HinhHoc {
        protected $chieudai;
        protected $chieurong;

        public function __construct($chieudai, $chieurong) {
            $this->chieudai = $chieudai;
            $this->chieurong = $chieurong;
        }
        abstract public function chuvi();
        abstract public function dientich();
    }
    class Hinhchunhat extends HinhHoc {
        public function chuvi() {
            return ($this->chieudai + $this->chieurong) * 2;
        }
        public function dientich() {
            return $this->chieudai * $this->chieurong;
        }
    }
    $hinhChuNhat = new Hinhchunhat(10, 5);
    echo $hinhChuNhat->chuvi() . "\n";
?>
