<?php


namespace App;


class Vector
{
    public $X;
    public $Y;

    public function __construct($x, $y){
        $this->X = $x;
        $this->Y = $y;
    }

    public function get_vector_len(){
        return sqrt(pow($this->X,2)+pow($this->Y,2));
    }

    public function vector_is_alive(){
        if($this->get_vector_len() == 0)
            return false;
        return true;
    }

    public function is_perpendicular(Vector $vector){
        if($this->X * $vector->X + $this->Y * $vector->Y == 0)
            return true;
        return false;
    }
}
