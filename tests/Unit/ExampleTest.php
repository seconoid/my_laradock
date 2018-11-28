<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        var_dump($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        $this->assertTrue(true);
    }
}
