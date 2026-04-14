<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\Implementations\without;

class TestSolution extends TestCase
{
    public function testWithout()
    {
        // BEGIN (write your solution here)
        $this->assertEquals([2, 1, 2], without([2, 1, 2, 3], [1, 2]));
        $this->assertEquals([], without([2, 1, 2, 3]));
        // END
    }
}
