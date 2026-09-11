<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';
require_once 'Lingkaran.php';
require_once 'Tabung.php';
require_once 'Kerucut.php';
require_once 'Bola.php';


$author = new Author();
$author->name = "jek";
$author->description = "Penulis Novel";
print_r($author->show("Fiksi"));

$book = new Book();
$book->title = "Bumi";
$book->description = "Novel Fantasi";
print_r($book->show());

$publisher = new Publisher();
$publisher->name = "Gramedia";
$publisher->address = "Jakarta";
print_r($publisher->show());

$lingkaran = new Lingkaran(7);
echo "Luas Lingkaran: " . $lingkaran->luas() . "\n";

$tabung = new Tabung(7, 10);
echo "Volume Tabung: " . $tabung->volume() . "\n";

$kerucut = new Kerucut(7, 10);
echo "Volume Kerucut: " . $kerucut->volume() . "\n";

$bola = new Bola(7);
echo "Volume Bola: " . $bola->volume() . "\n";