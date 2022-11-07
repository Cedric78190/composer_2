<?php

require '../vendor/autoload.php';

use App\Hello\Hello;

$hello = new Hello();
echo $hello->talk();