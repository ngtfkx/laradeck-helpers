<?php

namespace Tests\Packages\Ngtfkx\Laradeck\Helpers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class JsonTest extends TestCase
{
    public function testIsJsonTrue()
    {
        $this->assertTrue(is_json(json_encode([1])));
    }

    public function testIsJsonFalse()
    {
        $this->assertFalse(is_json('1'));
    }
}
