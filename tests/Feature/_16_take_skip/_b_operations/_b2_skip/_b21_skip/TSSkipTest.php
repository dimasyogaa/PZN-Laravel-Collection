<?php

namespace Tests\Feature\_16_take_skip\_b_operations\_b2_skip\_b21_skip;

use Tests\TestCase;

// php artisan test --filter TSSkipTest
class TSSkipTest extends TestCase
{
    public function testSkip()
    {
        $collection = collect(["a", "b", "c", "d", "e", "f", "g", "h", "i"]);

        $result = $collection->skip(3);
        $this->assertEqualsCanonicalizing(["d", "e", "f", "g", "h", "i"], $result->all());

    }
}
