<?php namespace Tests\Unit;

use Performance\Performance;

class T14A_UseExceptionsTest extends \PHPUnit_Framework_TestCase
{
    protected function setTestUp()
    {
        Performance::instanceReset();
    }

    public function testPointInvalidArgumentException()
    {
        $this->setTestUp();

        // Start multiple point 1
        Performance::point('A');
        $this->expectException(\InvalidArgumentException::class);
        Performance::point('A');

        Performance::results();
    }
}
