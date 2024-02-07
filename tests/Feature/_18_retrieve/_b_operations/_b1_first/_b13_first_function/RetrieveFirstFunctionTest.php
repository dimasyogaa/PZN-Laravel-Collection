<?php

namespace Tests\Feature\_18_retrieve\_b_operations\_b1_first\_b13_first_function;

use Tests\TestCase;

// php artisan test --filter RetrieveFirstFunctionTest
class RetrieveFirstFunctionTest extends TestCase
{
    /**
     * Test untuk mengambil data pertama di collection yang memenuhi kondisi function menggunakan first(function).
     */
    public function testFirstWithFunction()
    {
        $collection = collect([1, 2, 3, 4, 5]);

        // Memastikan collection mengembalikan data pertama yang memenuhi kondisi function.
        $result = $collection->first(function ($value, $key) {
            return $value > 2;
        });
        $this->assertEquals(3, $result);
    }
}
