<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');

$jam_angka = (int)date('H');
$jam_menit = date('h.i');

if ($jam_angka >= 0 && $jam_angka < 12) {
    $waktu = "pagi";
} elseif ($jam_angka >= 12 && $jam_angka < 15) {
    $waktu = "siang";
} elseif ($jam_angka >= 15 && $jam_angka < 18) {
    $waktu = "sore";
} else {
    $waktu = "malam";
}

echo "Halo {$nama} sekarang pukul {$jam_menit} {$waktu}\n";