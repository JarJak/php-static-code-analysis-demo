<?php

namespace tests\Foo;

use Foo\Bar;
use PHPUnit\Framework\TestCase;

class BarTest extends TestCase
{
    /**
     * @dataProvider slugifyProvider
     */
    function testSlugify($input, $separator, $output)
    {
        $obj = new Bar();
        $this->assertEquals($output, $obj->slugify($input, $separator));
    }

    function test_increment_all()
    {
        $input = array(1, 2, 'asd', 5, 3);
        $output = array(2, 3, 'asd', 6, 4);
        $obj = new Bar();
        $this->assertEquals($output, $obj->increment_all($input));
    }

    public function slugifyProvider() {
        return [
            ['foo bar baz', '-', 'foo-bar-baz'],
            ['Zażółć gęsią jaźń', '_', 'za_g_si_ja']
        ];
    }
}
