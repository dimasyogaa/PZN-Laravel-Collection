<?php

namespace Tests\Feature\_16_take_skip\_b_operations\_b1_take\_b12_takeuntil;

use Tests\TestCase;

// php artisan test --filter TSTakeUntilTest
class TSTakeUntilTest extends TestCase
{
    public function testTakeUntil()
    {
        $collection = collect(["a", "b", "c", "a", "b", "f", "g", "h", "i"]);


        $result = $collection->takeUntil(function ($value, $key) {
            return $value == "c";
        });
        $this->assertEqualsCanonicalizing(["a", "b"], $result->all());

    }
}
