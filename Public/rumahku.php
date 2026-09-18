<?php

require_once __DIR__ . '/../app/Site/Guest/HomePage.php';
require_once __DIR__ . '/../app/Site/Admin/HomePage.php';

use App\Site\Guest\HomePage as GuestHomePage;
use App\Site\Admin\HomePage as AdminHomePage;

$hp = new GuestHomePage();
$hp->tampil();