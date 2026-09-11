<?php

require_once '../shapes/Lingkaran.php';
require_once '../shapes/Bola.php';
require_once '../shapes/Tabung.php';
require_once '../shapes/Kerucut.php';

echo "--- LINGKARAN ---\n";
$objek_lingkaran = new Lingkaran(4); 
echo "Luas: " . $objek_lingkaran->luas() . " cm persegi\n";
echo "Keliling: " . $objek_lingkaran->keliling() . " cm\n\n";

echo "--- BOLA ---\n";
$objek_bola = new Bola(7);
echo "Luas Permukaan: " . $objek_bola->luasPermukaan() . "\n";
echo "Volume: " . $objek_bola->volume() . "\n\n";

echo "--- TABUNG ---\n";
$objek_tabung = new Tabung(5, 10); 
echo "Luas Permukaan: " . $objek_tabung->luasPermukaan() . "\n";
echo "Volume: " . $objek_tabung->volume() . "\n\n";

echo "--- KERUCUT ---\n";
$objek_kerucut = new Kerucut(3, 4); 
echo "Luas Permukaan: " . $objek_kerucut->luasPermukaan() . "\n";
echo "Volume: " . $objek_kerucut->volume() . "\n";