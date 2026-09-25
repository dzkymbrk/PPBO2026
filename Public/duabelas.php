<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\Dosen;
use App\Akademik\Dekan;

$dian = new Dosen(198411132015041001, "Dian Prawira", "62111111", "Jln Purnama", "0013118405");

$dian->mengajar();
echo "No HP: " . $dian->getNoHp() . "\n";

// Memanggil function getter untuk mengambil nilai NIDN
echo "NIDN Dosen: " . $dian->getNidn() . "\n";

$dekan = new Dekan(197501012000121001, "Dr. Ir. Hendra", "62812345678", "Jln Ahmad Yani", "0001017501");
$dekan->mengesahkanSuratIjinMagang();

$dekan->mengajar();
echo "No HP Dekan: " . $dekan->getNoHp() . "\n";

