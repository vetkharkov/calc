<?php

/**
 * Created by PhpStorm.
 * User: vet
 * Date: 24.03.17
 * Time: 19:48
 */
class Triangle extends Shape
{
    use Set_Get;

    function __construct($ta, $th)
    {
//        $this->ta = $ta;
        $this->SetTA($ta);
//        $this->th = $th;
        $this->SetTH($th);
    }

    public function resultArea()
    {
        $sideA = $this->getTA();
        $sideH = $this->getTH();
        return ($sideA * $sideH) / 2;
    }

}