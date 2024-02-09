<?php

namespace Tests\Feature\_22_aggregate\_b_operations\_b1_min;

use Tests\TestCase;

// php artisan test --filter AggregateMinTest
class AggregateMinTest extends TestCase
{
    /**
     * Test untuk mengambil data paling kecil menggunakan min().
     */
    public function testMin()
    {
        $collection = collect([3, 1, 4, 1, 5, 9, 2, 6]);
        $minValue = $collection->min();
        $this->assertEquals(1, $minValue);
    }


}
