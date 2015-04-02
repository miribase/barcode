# BarCode PHP
Package for generating barcodes in HTML format with PHP.

## Supported codes
Currently the BarCode PHP works with the formats below:

| **Code**      | **Implemented** | **Tested with Handheld Scanner** |
|---------------|-----------------|----------------------------------|
| **Code 39**   | Yes             | Yes                              |
|               |                 |                                  |

Installation
----------
```
$ composer require nesbot/carbon
```

```json
{
    "require": {
        "ianrodrigues/barcode": "~0.*"
    }
}
```

Usage
----------
```php
<?php
require './vendor/autoload.php';

use Rodrigues\Barcode\Barcode;

$barcode = new Barcode;

echo "<style>";
echo $barcode->getCssStyle();
echo "</style>";
// <style>.barcode{height:50px}.barcode div{display:inline-block;height:100%}.barcode .black{border-color:#000;border-left-style:solid;width:0}.barcode .white{background:#fff}.barcode .thin.black{border-left-width:1px}.barcode .large.black{border-left-width:3px}.barcode .thin.white{width:1px}.barcode .large.white{width:3px}</style>

// Code39
echo $barcode->code39("AB20150401CD");
//<div class='barcode'><div class='black thin'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin separator'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin separator'></div><div class='black large'></div><div class='white large'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin separator'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin separator'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white large'></div><div class='black large'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin separator'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin separator'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white large'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin separator'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white large'></div><div class='black large'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin separator'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white large'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin separator'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white large'></div><div class='black large'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin separator'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin separator'></div><div class='black large'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin separator'></div><div class='black thin'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin separator'></div><div class='black thin'></div><div class='white large'></div><div class='black thin'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black large'></div><div class='white thin'></div><div class='black thin'></div><div class='white thin separator'></div></div>
```