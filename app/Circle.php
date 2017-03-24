<?php
/**
 * Created by PhpStorm.
 * User: vet
 * Date: 19.03.17
 * Time: 20:14
 */

class Circle extends Shape
{
    use Set_Get;

    function __construct($r)
    {
//        $this->r = $r;
        $this->SetR($r);
    }

    public function resultArea()
    {
        $res = self::getR();
        return M_PI * ($res * $res);
    }

    public function resultPerimeter()
    {
        return 2 * M_PI * self::getR();
    }

    public function resultDiameter()
    {
        return 2 * self::getR();
    }
}


