<?php

namespace App\Akademik;

use App\Akademik\Pegawai;
use App\Akademik\PenilaianKinerja;

class Dosen extends Pegawai implements PenilaianKinerja
{
    private string $nidn;
    private int $jumlah_sks;

    public function __construct(int $nip, string $nama, string $no_hp, string $alamat, string $nidn)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
        $this->jumlah_sks = 24;
    }

    public function getNidn(): string
    {
        return $this->nidn;
    }

    public function __get(string $name)
    {
        if ($name === 'jumlah_sks') {
            return $this->jumlah_sks;
        }
        if ($name === 'nidn') {
            return $this->nidn;
        }
        return null;
    }

    public function __set(string $name, $value): void
    {
        if ($name === 'jumlah_sks') {
            $this->jumlah_sks = (int)$value;
        }
    }

    public function bekerja(): void
    {
        echo $this->nama . " sedang mengajar dan membimbing mahasiswa.<br>";
    }

    public function hitungTunjanganKinerja(): int
    {
        return $this->jumlah_sks * 150000;
    }
}