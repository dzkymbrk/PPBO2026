<?php

namespace App\Akademik;

use App\Akademik\Pegawai;

class Dosen extends Pegawai
{
    private string $nidn;
    public int $jumlah_sks;

    public function __construct(int $nip, string $nama, string $no_hp, string $alamat, string $nidn)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
        $this->jumlah_sks = 24;
    }

    public function bekerja(): void
    {
        echo $this->nama . " sedang mengajar dan membimbing mahasiswa.\n";
    }

    public function mengajar(): void
    {
        echo $this->nama . " sedang mengajar perkuliahan.\n";
    }

    public function getNidn(): string
    {
        return $this->nidn;
    }
}