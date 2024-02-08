<?php

namespace Tests\Feature\_20_checking_existence\_b_operations\_b3_contains_value;

use Tests\TestCase;

// php artisan test --filter CEContainsValueTest
class CEContainsValueTest extends TestCase
{
    /**
     * Test untuk mengecek apakah collection memiliki value menggunakan contains(value).
     */
    public function testContainsValue()
    {
        $collection = collect([1, 2, 3, 4, 5]);

        // Memastikan collection memiliki value yang diberikan atau tidak.
        $this->assertTrue($collection->contains(3));
        $this->assertFalse($collection->contains(6));
    }

}
