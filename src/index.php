<?php

namespace App;
require "MagicClass.php";

$magic = new MagicClass('Pety', 18);
$magic->age=18;
$name = $magic->name;
$magic->change_age();
MagicClass::do_something();
empty($magic->age);
unset($magic->age);

echo ($magic);