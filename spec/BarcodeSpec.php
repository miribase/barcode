<?php

namespace spec\Rodrigues\Barcode;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Rodrigues\Barcode\Html;
use Rodrigues\Barcode\Validator;
use Rodrigues\Barcode\Parser;

class BarcodeSpec extends ObjectBehavior
{

    public function let()
    {
        $this->beConstructedWith(new Html, new Validator, new Parser);
    }

    public function it_returns_css_style_properly()
    {
        $cssStyle = ".barcode{height:100px}.barcode div{display:inline-block;height:100%}.barcode .black{border-color:#000;border-left-style:solid;width:0}.barcode .white{background:#fff}.barcode .thin.black{border-left-width:1px}.barcode .large.black{border-left-width:3px}.barcode .thin.white{width:1px}.barcode .large.white{width:3px}";

        $this->getCssStyle()
             ->shouldReturn($cssStyle);
    }

    public function it_should_not_generate_code_39_for_invalid_string()
    {
        $this->shouldThrow("\InvalidArgumentException")
             ->duringCode39("?:,<");
    }

    public function it_should_generate_code39_for_A()
    {
        $this->code39("A")
             ->shouldReturn("<div class='codebar'><div class='black thin'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin separator'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin separator'></div><div class='black thin'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin separator'></div></div>");
    }

}
