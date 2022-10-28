<?php

namespace AlibabaCloud\Darabonba\ArrayUtil\Tests;

use AlibabaCloud\Darabonba\ArrayUtil\ArrayUtil;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class ArrayTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(
            ['b', 'c'],
            ArrayUtil::split(['a', 'b', 'c'], 1, 2)
        );

        $this->assertTrue(
            ArrayUtil::contains(['a', 'b', 'c'], 'b')
        );

        $this->assertFalse(
            ArrayUtil::contains(['a', 'b', 'c'], 'd')
        );

        $this->assertEquals(
            1,
            ArrayUtil::index(['a', 'b', 'c'], 'b')
        );

        $this->assertEquals(
            0,
            ArrayUtil::index(['a', 'b', 'c'], 'a')
        );

        $this->assertEquals(
            -1,
            ArrayUtil::index(['a', 'b', 'c'], 'd')
        );

        $this->assertEquals(
            3,
            ArrayUtil::size(['a', 'b', 'c'])
        );

        $this->assertEquals(
            0,
            ArrayUtil::size([])
        );

        $this->assertEquals(
            'b',
            ArrayUtil::get(['a', 'b', 'c'], 1)
        );

        $this->assertEquals(
            'a,b,c',
            ArrayUtil::join(['a', 'b', 'c'], ',')
        );

        $this->assertEquals(
            'a|b|c',
            ArrayUtil::join(['a', 'b', 'c'], '|')
        );

        $arr = ArrayUtil::ascSort(['b', 'a', 'c']);
        $this->assertEquals(
            ['a', 'b', 'c'],
            $arr
        );

        $this->assertEquals(
            ['c', 'b', 'a'],
            ArrayUtil::descSort(['b', 'a', 'c'])
        );

        $array = null;
        ArrayUtil::append($array, 'a');
        $this->assertEquals(
            null,
            $array
        );

        $array = ['a', 'b', 'c'];
        ArrayUtil::append($array, 'd');
        $this->assertEquals(
            ['a', 'b', 'c', 'd'],
            $array
        );
        ArrayUtil::append($array, 1);
        $this->assertEquals(
            ['a', 'b', 'c', 'd', 1],
            $array
        );
        ArrayUtil::append($array, true);
        $this->assertEquals(
            ['a', 'b', 'c', 'd', 1, true],
            $array
        );
    }
}
