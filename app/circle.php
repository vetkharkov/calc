<?php

/**
 * Created by PhpStorm.
 * User: vet
 * Date: 19.03.17
 * Time: 20:14
 */
class circle
{
    private $radius = 0;

    public function GetRadius()
    {
        return $this->radius;
    }

    public function SetRadius($rad)
    {
        $this->radius = $rad;
    }

    public function Area()
    {
        $rad = $this->radius;
        return M_PI * ($rad * $rad);
    }

    public function Perimeter()
    {
        return 2 * M_PI * $this->GetRadius();
    }

    public function Diameter()
    {
        $rad = $this->radius;
        return 2 * $rad;
    }
}





