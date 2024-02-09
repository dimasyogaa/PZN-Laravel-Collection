<?php

namespace Tests\Feature\_22_aggregate\_b_operations\_b4_sum;

use Tests\TestCase;

// php artisan test --filter AggregateSumTest
class AggregateSumTest extends TestCase
{
    /**
     * Test untuk mengambil seluruh jumlah data menggunakan sum().
     */
    public function testSum()
    {
        $collection = collect([3, 1, 4, 1, 5, 9, 2, 6]);
        $sumValue = $collection->sum();
        $this->assertEquals(31, $sumValue);
    }


}
