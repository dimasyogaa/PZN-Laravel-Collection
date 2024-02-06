<?php

namespace Tests\Feature\_13_testing\_b_operations\_b3_contains\_b33_function;

use Tests\TestCase;

// php artisan test --filter ExistContainsFunctionTest
class ExistContainsFunctionTest extends TestCase
{

    /**
     * Test untuk mengecek apakah collection memiliki data yang memenuhi kondisi function menggunakan contains(function).
     */
    public function testContainsFunction()
    {
        $collection = collect(['apple', 'banana', 'cherry']);

        // Memastikan collection memiliki data yang memenuhi kondisi function.
        $containsCherry = $collection->contains(function ($value, $key) {
            return $value === 'cherry';
        });
        $this->assertTrue($containsCherry);

        $containsOrange = $collection->contains(function ($value, $key) {
            return $value === 'orange';
        });
        $this->assertFalse($containsOrange);
    }
}
