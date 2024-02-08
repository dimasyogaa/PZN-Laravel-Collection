<?php

namespace Tests\Feature\_20_checking_existence\_b_operations\_b4_constains_function;

use Tests\TestCase;

// php artisan test --filter CEContainsFunctionTest
class CEContainsFunctionTest extends TestCase
{
    /**
     * Test untuk mengecek apakah collection memiliki value dengan kondisi function yang menghasilkan true menggunakan contains(function).
     */
    public function testContainsWithFunction()
    {
        $collection = collect([1, 2, 3, 4, 5]);

        // Memastikan collection memiliki value yang memenuhi kondisi function atau tidak.
        $result = $collection->contains(function ($value, $key) {
            return $value > 2;
        });
        $this->assertTrue($result);

        $result = $collection->contains(function ($value, $key) {
            return $value > 5;
        });
        $this->assertFalse($result);
    }
}
