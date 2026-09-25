<?php

namespace App\Akademik;

use App\Akademik\Dosen;

class Dekan extends Dosen
{
    public function mengesahkanSuratIjinMagang(): void
    {
        echo "Magang anda telah disetujui\n";
    }
}