<?php
class Mobil {
    public $brand;
    public function startEngine(){
        echo "Engine started!";
    }
}
$mobil1 = new Mobil();
$mobil1->brand = "Toyota";
$mobil2 = new Mobil();
$mobil2->brand = "Honda";

$mobil1->startEngine();
echo $mobil2->brand;