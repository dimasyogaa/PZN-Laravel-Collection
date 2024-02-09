<?php

namespace Tests\Feature\_22_aggregate\_b_operations\_b2_max;

use Tests\TestCase;

// php artisan test --filter AggregateMaxTest
class AggregateMaxTest extends TestCase
{
    /**
     * Test untuk mengambil data paling besar menggunakan max().
     */
    public function testMax()
    {
        $collection = collect([3, 1, 4, 1, 5, 9, 2, 6]);
        $maxValue = $collection->max();
        $this->assertEquals(9, $maxValue);
    }


}
