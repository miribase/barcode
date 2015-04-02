<?php

namespace spec\Rodrigues\Barcode;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ParserSpec extends ObjectBehavior
{

    public function it_should_parse_code39_properly()
    {
        $this->parseStringToCode39("A")
             ->shouldReturn(["bWbwBwBwb", "BwbwbWbwB", "bWbwBwBwb"]);

        $this->parseStringToCode39("a")
             ->shouldReturn(["bWbwBwBwb", "BwbwbWbwB", "bWbwBwBwb"]);

        $this->parseStringToCode39("1")
             ->shouldReturn(["bWbwBwBwb", "BwbWbwbwB", "bWbwBwBwb"]);

        $this->parseStringToCode39("100")
             ->shouldReturn(["bWbwBwBwb", "BwbWbwbwB", "bwbWBwBwb", "bwbWBwBwb", "bWbwBwBwb"]);
    }

}
