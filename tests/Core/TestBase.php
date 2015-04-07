<?php

namespace Tests;

class TestBase extends \PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $subject = new \LogRegSys\Base();

        $this->assertTrue($subject->ok());
    }
}
