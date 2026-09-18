<?php
require_once __DIR__ . '/../Site/HomePage.php';
require_once __DIR__ . '/../Site/Admin/HomePage.php';

use App\Site\Guest\HomePage as GuestHomePage;
use App\Site\Admin\HomePage as AdminHomePage;

$hp = new AdminHomePage();
$hp->tampil();
