<?php namespace Rodrigues\Barcode;

class Parser {

    /**
     * Converts the string in a Code39 valid.
     *
     * @see    http://en.wikipedia.org/wiki/Code_39
     * @param  string $string
     * @return string
     */
    public function parseStringToCode39($string)
    {
        // must start with an asterisk
        if (substr($string, 0, 1) != "*") {
            $string = "*" . $string;
        }

        // must end with an asterisk
        if (substr($string, -1, 1) != "*") {
            $string = $string . "*";
        }

        $string = strtoupper($string);

        $code39 = [];

        foreach (str_split($string) as $char) {
            $code39[] = $this->code39Pattern($char);
        }

        return $code39;
    }

    /**
     * Returns the pattern for an specific character.
     *
     * @see    http://en.wikipedia.org/wiki/Code_39
     * @param  string $char
     * @return string
     */
    private function code39Pattern($char)
    {
        /** @var array */
        $code39Patterns = [
            '0'=>'bwbWBwBwb', '1'=>'BwbWbwbwB',
            '2'=>'bwBWbwbwB', '3'=>'BwBWbwbwb',
            '4'=>'bwbWBwbwB', '5'=>'BwbWBwbwb',
            '6'=>'bwBWBwbwb', '7'=>'bwbWbwBwB',
            '8'=>'BwbWbwBwb', '9'=>'bwBWbwBwb',
            'A'=>'BwbwbWbwB', 'B'=>'bwBwbWbwB',
            'C'=>'BwBwbWbwb', 'D'=>'bwbwBWbwB',
            'E'=>'BwbwBWbwb', 'F'=>'bwBwBWbwb',
            'G'=>'bwbwbWBwB', 'H'=>'BwbwbWBwb',
            'I'=>'bwBwbWBwb', 'J'=>'bwbwBWBwb',
            'K'=>'BwbwbwbWB', 'L'=>'bwBwbwbWB',
            'M'=>'BwBwbwbWb', 'N'=>'bwbwBwbWB',
            'O'=>'BwbwBwbWb', 'P'=>'bwBwBwbWb',
            'Q'=>'bwbwbwBWB', 'R'=>'BwbwbwBWb',
            'S'=>'bwBwbwBWb', 'T'=>'bwbwBwBWb',
            'U'=>'BWbwbwbwB', 'V'=>'bWBwbwbwB',
            'W'=>'BWBwbwbwb', 'X'=>'bWbwBwbwB',
            'Y'=>'BWbwBwbwb', 'Z'=>'bWBwBwbwb',
            '-'=>'bWbwbwBwB', '.'=>'BWbwbwBwb',
            ' '=>'bWBwbwBwb', '$'=>'bWbWbWbwb',
            '/'=>'bWbWbwbWb', '+'=>'bWbwbWbWb',
            '%'=>'bwbWbWbWb', '*'=>'bWbwBwBwb'
            ];

        return $code39Patterns[$char];
    }

}
