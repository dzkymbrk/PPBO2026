<?php

use App\Akademik\Dosen;

require_once __DIR__ . '/../vendor/autoload.php';

$dian = new Dosen(198411132015041001, "Dian Prawira", "62111111", "Jln Purnama", "0013118405");
$dian->mengajar();
echo $dian->getNoHp() . "\n";

// Mengisi/mengubah nilai property nidn secara langsung dari luar class
$dian->nidn = "1000121184001";