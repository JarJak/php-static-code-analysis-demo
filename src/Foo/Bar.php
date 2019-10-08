<?php
namespace Foo;

class Bar
{
    /**
     * @param array $imput
     * @return array
     */
    function increment_all($input) {
        $output = array();
        foreach ($input as $i => $value) {
            if(is_numeric($value) == true) {
                $output[$i] = $value + 1;
            } else {
                $output[$i] = $value;
            }
        }
        return $output;
    }

    /**
     * @param string $input
     * @param string $separator
     * @param array|null $allowedChars
     */
    public function slugify($input, $separator = '-') {
        $input = strtolower($input);
        $input = preg_replace("/[^a-z0-9]/", $separator, $input);
        $input = preg_replace('/[\\'.$separator.']+/', $separator, $input);
        return trim($input, $separator);
    }
}
