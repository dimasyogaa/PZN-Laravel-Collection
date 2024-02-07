<?php

namespace Tests\Feature\_16_take_skip\_b_operations\_b2_skip\_b22_skipuntil;

use Tests\TestCase;

// php artisan test --filter TSSkipUntilTest
class TSSkipUntilTest extends TestCase
{
    public function testSkipUntil()
    {
        $collection = collect(["a", "b", "c", "d", "e", "f", "g", "h", "i"]);


        $result = $collection->skipUntil(function ($value, $key) {
            return $value == "c";
        });
        $this->assertEqualsCanonicalizing(["c", "d", "e", "f", "g", "h", "i"], $result->all());

    }
}
