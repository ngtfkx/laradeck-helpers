<?php

namespace Tests\Packages\Ngtfkx\Laradeck\Helpers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MathTest extends TestCase
{
    public function testIsEvenTrue()
    {
        $this->assertTrue(is_even(2));
    }

    public function testIsEvenFalse()
    {
        $this->assertFalse(is_even(3));
    }

    public function testIsOddTrue()
    {
        $this->assertTrue(is_odd(3));
    }

    public function testIsOddFalse()
    {
        $this->assertFalse(is_odd(2));
    }
}
