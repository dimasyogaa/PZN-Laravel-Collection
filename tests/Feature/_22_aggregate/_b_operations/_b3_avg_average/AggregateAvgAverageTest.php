<?php

namespace Tests\Feature\_22_aggregate\_b_operations\_b3_avg_average;

use Tests\TestCase;

// php artisan test --filter AggregateAvgAverageTest
class AggregateAvgAverageTest extends TestCase
{
    /**
     * Test untuk mengambil rata-rata data menggunakan avg() atau average().
     */
    public function testAvg()
    {
        $collection = collect([3, 1, 4, 1, 5, 9, 2, 6]);
        $averageValue = $collection->avg();
        $this->assertEquals(3.875, $averageValue);
    }


}
