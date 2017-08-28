<?php

namespace Tests\Packages\Ngtfkx\Laradeck\Helpers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStrIsPositiveInt()
    {
        $this->assertTrue(str_is_positive_int('1'));
        $this->assertFalse(str_is_positive_int('-1'));
        $this->assertFalse(str_is_positive_int('2.2'));
        $this->assertTrue(str_is_positive_int('0'));
        $this->assertFalse(str_is_positive_int('2a'));
        $this->assertFalse(str_is_positive_int('a2'));
        $this->assertTrue(str_is_positive_int(2));
        $this->assertFalse(str_is_positive_int(-2));
        $this->assertFalse(str_is_positive_int(2.5));
    }
}
