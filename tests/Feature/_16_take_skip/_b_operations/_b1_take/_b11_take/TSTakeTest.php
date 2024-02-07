<?php

namespace Tests\Feature\_16_take_skip\_b_operations\_b1_take\_b11_take;

use Tests\TestCase;

// php artisan test --filter TSTakeTest
class TSTakeTest extends TestCase
{
    public function testTake()
    {
        $collection = collect(["a", "b", "c", "d", "e", "f", "g", "h", "i"]);

        $result = $collection->take(3);
        $this->assertEqualsCanonicalizing(["a", "b", "c"], $result->all());

    }
}
