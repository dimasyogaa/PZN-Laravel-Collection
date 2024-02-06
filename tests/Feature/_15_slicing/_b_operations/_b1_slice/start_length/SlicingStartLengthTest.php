<?php

namespace Tests\Feature\_15_slicing\_b_operations\_b1_slice\start_length;

use Tests\TestCase;

// php artisan test --filter SlicingStartLengthTest
class SlicingStartLengthTest extends TestCase
{
    public function testSliceStartLength()
    {
        $collection = collect(["a", "b", "c", "d", "e", "f", "g", "h", "i"]);

        $result = $collection->slice(3, 2);

        $this->assertEqualsCanonicalizing(["d", "e"], $result->all());
    }
}
