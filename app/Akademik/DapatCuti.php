<?php
namespace App\Akademik;

interface DapatCuti
{
    public function Ajukancuti(int $jumlah_hari): void;
}