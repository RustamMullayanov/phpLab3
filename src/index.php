<?php

namespace App;
require "MagicClass.php";
require "Point.php";
require "Vector.php";

$magic = new MagicClass('Pety', 18);
$magic->age=18;
$name = $magic->name;
$magic->change_age();
MagicClass::do_something();
empty($magic->age);
unset($magic->age);
$magic(2);
$str = serialize($magic);
unserialize($str);
$clone = clone $magic;
echo ($magic);

echo "<br/>";
echo "<br/>";

$T1 = new Point(1,3);
$V1 = new Vector(4,4);
$V2 = new Vector(0,0);
$V3 = new Vector(-4,4);
echo($V1->get_vector_len()."<br/>");
echo($V2->get_vector_len()."<br/>");
echo($V3->get_vector_len()."<br/>");
var_dump($V2->vector_is_alive());
echo "<br/>";
var_dump($V1->is_perpendicular($V3));
echo "<br/>";
echo('X '.$T1->X.' '.'Y '. $T1->Y."<br/>");
$T1->translation_in_axis_x($V1->X);
$T1->translation_in_axis_y($V1->Y);
echo('X '.$T1->X.' '.'Y '. $T1->Y."<br/>");
