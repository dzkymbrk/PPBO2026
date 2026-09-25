<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\TenagaKependidikan;

$tendik = new TenagaKependidikan(
    199005152020121002,
    "Budi Santoso",
    "628987654321",
    "Jl. Ahmad Yani No. 12",
    3500000
);

$tendik->cekIn();

$tendik->cuti();

echo "Gaji Pokok: Rp " . number_format($tendik->getGajiPokok(), 0, ',', '.') . "\n";