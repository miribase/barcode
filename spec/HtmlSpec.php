<?php

namespace spec\Rodrigues\Barcode;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HtmlSpec extends ObjectBehavior
{

    public function it_should_return_the_html_properly()
    {
        $this->generateHtmlToCode(["B"])
             ->shouldReturn("<div class='black large'></div><div class='white thin separator'></div>");

        $this->generateHtmlToCode(["b"])
             ->shouldReturn("<div class='black thin'></div><div class='white thin separator'></div>");

        $this->generateHtmlToCode(["W"])
             ->shouldReturn("<div class='white large'></div><div class='white thin separator'></div>");

        $this->generateHtmlToCode(["w"])
             ->shouldReturn("<div class='white thin'></div><div class='white thin separator'></div>");

        $this->generateHtmlToCode(["B"], false)
             ->shouldReturn("<div class='black large'></div>");

        $this->generateHtmlToCode(["b"], false)
             ->shouldReturn("<div class='black thin'></div>");

        $this->generateHtmlToCode(["W"], false)
             ->shouldReturn("<div class='white large'></div>");

        $this->generateHtmlToCode(["w"], false)
             ->shouldReturn("<div class='white thin'></div>");
    }

    public function it_should_return_the_output_properly()
    {
        $this->output("string")
             ->shouldReturn("<div class='barcode'>string</div>");
    }

}
