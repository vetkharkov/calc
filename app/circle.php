<?php
/**
 * Created by PhpStorm.
 * User: vet
 * Date: 19.03.17
 * Time: 20:14
 */
class Circle
{
    private $radius = 0;

    private function SetRadius($rad)
    {
        $this->radius = $rad;
    }

    public function Area($r)
    {
        $this->SetRadius($r);
        $rad = $this->radius;
        return M_PI * ($rad * $rad);
    }

    public function Perimeter($r)
    {
        $this->SetRadius($r);
        return 2 * M_PI * $this->radius;
    }

    public function Diameter($r)
    {
        $this->SetRadius($r);
        $rad = $this->radius;
        return 2 * $rad;
    }
}