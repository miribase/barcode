<?php namespace spec\Rodrigues\Barcode;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ValidatorSpec extends ObjectBehavior
{
    public function it_should_return_true_for_valid_code39()
    {
        $this->validateCode39("*ABCD*")
             ->shouldReturn(true);

        $this->validateCode39("*abcd*")
             ->shouldReturn(true);

        $this->validateCode39("*1234*")
             ->shouldReturn(true);

        $this->validateCode39("*A1234567890B*")
             ->shouldReturn(true);

        $this->validateCode39("*a1234567890b*")
             ->shouldReturn(true);

        $this->validateCode39("*+/.*")
             ->shouldReturn(true);
    }

    public function it_should_return_false_for_invalid_code_39()
    {
        $this->validateCode39("*AB&CD*")
             ->shouldReturn(false);

        $this->validateCode39("*12!34*")
             ->shouldReturn(false);

        $this->validateCode39("*A12345_67890B*")
             ->shouldReturn(false);

        $this->validateCode39("*+/.?*")
             ->shouldReturn(false);
    }

}
