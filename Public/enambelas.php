<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Database\DbConnector;
use App\Akademik\Dosen;
use App\Akademik\TenagaKependidikan;
use App\Repository\PegawaiRepository;

// Lengkapi kode di bawah ini

$pegawaiRepo = new PegawaiRepository();


$dosen1 = new Dosen(1234, 'Dr. Dian Prawira', '0851121212', 'Jl. Veteran', '234234');
$dosen1->jumlah_sks = 18;
$tendik1 = new TenagaKependidikan(1235, 'Linia Dani', '0855121212', 'Jl. Purnama Tanjung', 7000000);

if ($pegawaiRepo->simpanPegawai($dosen1)) {
    echo "Data {$dosen1->nama} (Dosen) berhasil disimpan melalui Repository.\n";
} else {
    echo "Gagal menyimpan data {$dosen1->nama}. Cek log error.\n";
}

if ($pegawaiRepo->simpanPegawai($tendik1)) {
    echo "Data {$tendik1->nama} (Tendik) berhasil disimpan melalui Repository.\n";
} else {
    echo "Gagal menyimpan data {$tendik1->nama}. Cek log error.\n";
}
$listDosen = $pegawaiRepo->ambilSemuaDosen();
foreach ($listDosen as $dsn) {
echo "Dosen dengan nama {$dsn->nama} lulus sertifikasi \n";
}