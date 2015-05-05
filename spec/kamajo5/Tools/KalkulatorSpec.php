<?php

namespace spec\kamajo5\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

//plik spec/Gajdaw/Tools/KalkulatorSpec.php

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamajo5\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
    }
}

