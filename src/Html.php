<?php namespace Rodrigues\Barcode;

class Html {

    protected $cssStyle;

    const BLACK_LARGE = 'B';
    const BLACK_THIN  = 'b';
    const WHITE_LARGE = 'W';
    const WHITE_THIN  = 'w';

    /**
     * @param array $options Allow default CSS values to be modified
     */
    public function __construct($options = [])
    {
        $defaults = [
            'height' => 50,
            'thin_lin_width' => 1
        ];
        $options += $defaults;
        $options['large_line_width'] = $options['thin_line_width'] * 3;
        $this->cssStyle = '.barcode{height:'.$options['height'].'px}.barcode div{display:inline-block;height:100%}.barcode .black{border-color:#000;border-left-style:solid;width:0}.barcode .white{background:#fff}.barcode .thin.black{border-left-width:'.$options['thin_line_width'].'px}.barcode .large.black{border-left-width:'.$options['large_line_width'].'px}.barcode .thin.white{width:'.$options['thin_line_width'].'px}.barcode .large.white{width:'.$options['large_line_width'].'px}';
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
