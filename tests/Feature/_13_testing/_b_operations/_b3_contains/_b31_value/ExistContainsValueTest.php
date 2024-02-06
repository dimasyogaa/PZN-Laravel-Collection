<?php

namespace Tests\Feature\_13_testing\_b_operations\_b3_contains\_b31_value;

use Tests\TestCase;

// php artisan test --filter ExistContainsValueTest
class ExistContainsValueTest extends TestCase
{
    /**
     * Test untuk mengecek apakah collection memiliki data value menggunakan contains().
     */
    public function testContains()
    {
        $collection = collect([1, 2, 3, 4, 5]);

        // Memastikan collection memiliki data value yang diberikan.
        $this->assertTrue($collection->contains(3));
        $this->assertFalse($collection->contains(6));
    }
}
