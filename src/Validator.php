<?php namespace Rodrigues\Barcode;

class Validator {

    /**
     * Validate a code in Code39 format.
     *
     * @see    http://en.wikipedia.org/wiki/Code_39
     * @param  string $string
     * @return boolean
     */
    public function validateCode39($string)
    {
        $string = strtoupper($string);

        $allowedChars = [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            '1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
            ' ', '*', '-', '$', '%', '.', '/', '+'
        ];

        $isValid = true;

        foreach (str_split($string) as $char) {
            if (! in_array($char, $allowedChars)) {
                $isValid = false;
            }
        }

        return $isValid;
    }

}
