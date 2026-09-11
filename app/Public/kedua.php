<?php

function kelilingLingkaran(float $jari) : float {
    return 2 * 3.14 * $jari;
}

function volumeBola(float $jari) : float {
    return (4/3) * 3.14 * pow($jari, 3);
}

function volumeTabung(float $jari, float $tinggi) : float {
    return 3.14 * $jari * $jari * $tinggi;
}

function volumeKerucut(float $jari, float $tinggi) : float {
    return (1/3) * 3.14 * $jari * $jari * $tinggi;
}

$r = 45;
$t = 20;

echo "Keliling Lingkaran (r={$r}): " . kelilingLingkaran($r) . "\n";
echo "Volume Bola (r={$r}): " . volumeBola($r) . "\n";
echo "Volume Tabung (r={$r}, t={$t}): " . volumeTabung($r, $t) . "\n";
echo "Volume Kerucut (r={$r}, t={$t}): " . volumeKerucut($r, $t) . "\n";