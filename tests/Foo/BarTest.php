<?php

declare(strict_types=1);

namespace tests\Foo;

use Foo\Bar;
use PHPUnit\Framework\TestCase;

class BarTest extends TestCase
{
    /**
     * @dataProvider slugifyProvider
     */
    public function testSlugify($input, $separator, $output): void
    {
        $obj = new Bar();
        $this->assertSame($output, $obj->slugify($input, $separator));
    }

    public function testIncrementAll(): void
    {
        $input = [1, 2, 'asd', 5, 3];
        $output = [2, 3, 'asd', 6, 4];
        $obj = new Bar();
        $this->assertSame($output, $obj->increment_all($input));
    }

    public function slugifyProvider()
    {
        return [
            ['foo bar baz', '-', 'foo-bar-baz'],
            ['Zażółć gęsią jaźń', '_', 'za_g_si_ja'],
        ];
    }
}
