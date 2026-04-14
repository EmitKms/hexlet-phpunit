<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Utils\reverseString as Reverse;


class UtilsTest extends TestCase
{

    public function getFixtureFullPath(string $fixtureName): string
    {
        $parts = [__DIR__, 'fixtures', $fixtureName];
        return realpath(implode('/', $parts));
    }

    public function testReverse(): void
    {
        $originalText = rtrim(file_get_contents($this->getFixtureFullPath('Text.txt')), "\n");
        $expectedText = rtrim(file_get_contents($this->getFixtureFullPath('TestTrue.txt')), "\n");
        $reversed = Reverse($originalText);
        $this->assertSame($expectedText, $reversed);
    }
}
