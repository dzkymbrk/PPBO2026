<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\Dosen;

$dian = new Dosen(198411132015041001, "Dian Prawira", "62111111", "Jln Purnama", "0013118405");

$dian->mengajar();
echo "No HP: " . $dian->getNoHp() . "\n";

// Memanggil function getter untuk mengambil nilai NIDN
echo "NIDN Dosen: " . $dian->getNidn() . "\n";