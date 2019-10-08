<?php

declare(strict_types=1);

namespace Foo;

class Bar
{
    public function incrementAll(array $input): array
    {
        $output = [];
        foreach ($input as $i => $value) {
            if (true === is_numeric($value)) {
                $output[$i] = $value + 1;
            } else {
                $output[$i] = $value;
            }
        }

        return $output;
    }

    public function slugify(string $input, string $separator = '-'): string
    {
        $input = mb_strtolower($input);
        $input = preg_replace('/[^a-z0-9]/', $separator, $input);
        $input = preg_replace('/[\\'.$separator.']+/', $separator, $input);

        return trim($input, $separator);
    }
}
