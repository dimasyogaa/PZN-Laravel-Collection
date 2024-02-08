<?php

namespace Tests\Feature\_20_checking_existence\_b_operations\_b2_isnotempty;

use Tests\TestCase;

// php artisan test --filter CEIsNotEmptyTest
class CEIsNotEmptyTest extends TestCase
{
    /**
     * Test untuk mengecek apakah collection tidak kosong menggunakan isNotEmpty().
     */
    public function testIsNotEmpty()
    {
        $emptyCollection = collect([]);
        $nonEmptyCollection = collect([1, 2, 3]);

        // Memastikan collection tidak kosong atau sesuai dengan metodenya.
        $this->assertFalse($emptyCollection->isNotEmpty());
        $this->assertTrue($nonEmptyCollection->isNotEmpty());
    }
}
