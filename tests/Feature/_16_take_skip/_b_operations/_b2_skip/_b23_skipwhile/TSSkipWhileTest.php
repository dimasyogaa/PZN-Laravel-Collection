<?php

namespace Tests\Feature\_16_take_skip\_b_operations\_b2_skip\_b23_skipwhile;

use Tests\TestCase;

// php artisan test --filter TSSkipWhileTest
class TSSkipWhileTest extends TestCase
{
    public function testSkipWhile()
    {
        $collection = collect(["a", "b", "c", "d", "e", "f", "g", "h", "i"]);

        $result = $collection->skipWhile(function ($value, $key) {
            return $value < "c";
        });

        $this->assertEqualsCanonicalizing(["c", "d", "e", "f", "g", "h", "i"], $result->all());

    }
}
