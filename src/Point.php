<?php


namespace App;


class Point
{
    public $X;
    public $Y;

    public function __construct($x, $y){
        $this->X = $x;
        $this->Y = $y;
    }

    public function translation_in_axis_x($delta_x){
        $this->X += $delta_x;
    }

    public function translation_in_axis_y($delta_y){
        $this->Y += $delta_y;
    }

}
