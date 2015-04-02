<?php namespace Rodrigues\Barcode;

class Html {

    protected $cssStyle;

    const BLACK_LARGE = 'B';
    const BLACK_THIN  = 'b';
    const WHITE_LARGE = 'W';
    const WHITE_THIN  = 'w';

    public function __construct()
    {
        $this->cssStyle = ".barcode{height:100px}.barcode div{display:inline-block;height:100%}.barcode .black{border-color:#000;border-left-style:solid;width:0}.barcode .white{background:#fff}.barcode .thin.black{border-left-width:1px}.barcode .large.black{border-left-width:3px}.barcode .thin.white{width:1px}.barcode .large.white{width:3px}";
    }

    /**
     * Return the CSS style for the barcode.
     * 
     * @return string
     */
    public function getCssStyle()
    {
        return $this->cssStyle;
    }

    /**
     * Generates the HTML for the code.
     * 
     * @param  array $code
     * @param  bool  $addSeparator
     * @return string
     */
    public function generateHtmlToCode($code, $addSeparator = true)
    {
        $html = "";

        foreach ($code as $pattern) {
            $html .= $this->generateHtmlToPattern($pattern);

            if ($addSeparator)
                $html .= "<div class='white thin separator'></div>";
        }

        return $html;
    }

    /**
     * Returns the barcode in HTML format.
     * 
     * @param  string $barcode
     * @return string
     */
    public function output($barcode)
    {
        return sprintf("<div class='barcode'>%s</div>", $barcode);
    }

    /**
     * Generates the HTML for the pattern.
     * 
     * @param  string $pattern
     * @return string
     */
    private function generateHtmlToPattern($pattern)
    {
        $html = "";

        // para cada char do pattern...
        foreach (str_split($pattern) as $char) {
            // ...gera o html para aquele char
            switch ($char) {
                case self::BLACK_LARGE:
                    $classes = "black large";
                    break;
                case self::BLACK_THIN:
                    $classes = "black thin";
                    break;
                case self::WHITE_LARGE:
                    $classes = "white large";
                    break;
                case self::WHITE_THIN:
                    $classes = "white thin";
                    break;
            }

            $html .= "<div class='$classes'></div>";
        }

        return $html;
    }

}
