<?php namespace Rodrigues\Barcode;

use Rodrigues\Barcode\Html;
use Rodrigues\Barcode\Validator;
use Rodrigues\Barcode\Parser;

class Barcode {

    protected $cssStyle;
    protected $html;
    protected $validator;
    protected $parser;

    public function __construct(Html $html = null)
    {
        if($html === null) {
            $this->html = new Html;
        } else {
            $this->html = $html;
        }
        $this->validator = new Validator;
        $this->parser = new Parser;
    }

    /**
     * Return the CSS style for the barcode.
     * 
     * @return string
     */
    public function getCssStyle()
    {
        return $this->html->getCssStyle();
    }

    /**
     * Generates the barcode for Code39.
     * 
     * @see    http://en.wikipedia.org/wiki/Code_39
     * @param  string $code
     * @return string
     */
    public function code39($string)
    {
        if (! $this->validator->validateCode39($string)) {
            throw new \InvalidArgumentException("Invalid argument for Code39. Actual: ".$string);
        }

        $code39 = $this->parser->parseStringToCode39($string);

        $barcode = $this->html->generateHtmlToCode($code39);

        return $this->html->output($barcode);
    }
    
}
