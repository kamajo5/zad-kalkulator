<?php

namespace kamajo5\Tools;

class Kalkulator
{

    private $a;
    private $b;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }
    
    function it_should_calculate_sum()
{
    $this->setA(5)->setB(7)->sum()->shouldReturn(12);
}
public function sum()
{
    return $this->a + $this->b;
}

}