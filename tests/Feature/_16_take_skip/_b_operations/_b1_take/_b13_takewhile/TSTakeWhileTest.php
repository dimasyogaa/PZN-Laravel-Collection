<?php

namespace Tests\Feature\_16_take_skip\_b_operations\_b1_take\_b13_takewhile;

use Tests\TestCase;

// php artisan test --filter TSTakeWhileTest
class TSTakeWhileTest extends TestCase
{
    public function testTakeWhile()
    {
        $collection = collect(["a", "b", "c", "d", "e", "f", "g", "h", "i"]);

        $result = $collection->takeWhile(function ($value, $key) {
            return $value < "c";
        });
        $this->assertEqualsCanonicalizing(["a", "b"], $result->all());
    }
}
