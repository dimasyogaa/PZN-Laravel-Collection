<?php

namespace Tests\Feature\_15_slicing\_b_operations\_b1_slice\start;

use Tests\TestCase;

// php artisan test --filter SlicingStartTest
class SlicingStartTest extends TestCase
{
    public function testSliceStart()
    {
        $collection = collect(["a", "b", "c", "d", "e", "f", "g", "h", "i"]);

        // slice(3) : mengambil data dimulai dari index ke 3
        $result = $collection->slice(3);

        $this->assertEqualsCanonicalizing(["d", "e", "f", "g", "h", "i"], $result->all());
    }
}
