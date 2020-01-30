<?php

namespace App\Slugify;

use Funct\Strings;
use Funct\Collection;

// BEGIN (write your solution here)
function slugify(string $string): string
{
    $preparedString = \Funct\Strings\collapseWhitespace(trim($string));
    $words = explode(' ', \Funct\Strings\toLower(($preparedString)));
    return implode('-', $words);
}
// END

