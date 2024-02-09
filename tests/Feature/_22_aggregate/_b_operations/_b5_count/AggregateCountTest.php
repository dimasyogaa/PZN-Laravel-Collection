<?php

namespace Tests\Feature\_22_aggregate\_b_operations\_b5_count;

use Tests\TestCase;

// php artisan test --filter AggregateCountTest
class AggregateCountTest extends TestCase
{
    /**
     * Test untuk mengambil total seluruh data menggunakan count().
     */
    public function testCount()
    {
        $collection = collect([3, 1, 4, 1, 5, 9, 2, 6]);
        $countValue = $collection->count();
        $this->assertEquals(8, $countValue);
    }
}
