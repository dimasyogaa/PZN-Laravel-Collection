<?php

namespace Tests\Feature\_18_retrieve\_b_operations\_b2_last\_b22_last_function;

use Tests\TestCase;

// php artisan test --filter RetrieveLastFunctionTest
class RetrieveLastFunctionTest extends TestCase
{
    /**
     * Test untuk mengambil data terakhir di collection yang memenuhi kondisi function menggunakan last(function).
     */
    public function testLastWithFunction()
    {
        $collection = collect([1, 2, 3, 4, 5]);

        // Memastikan collection mengembalikan data terakhir yang memenuhi kondisi function.
        $result = $collection->last(function ($value, $key) {
            return $value < 4;
        });
        $this->assertEquals(3, $result);
    }
}
