<?php

namespace Tests\Feature\_20_checking_existence\_b_operations\_b5_constainsoneitem;

use Tests\TestCase;

// php artisan test --filter CEContainsOneItemTest
class CEContainsOneItemTest extends TestCase
{
    /**
     * Test untuk mengecek apakah collection hanya memiliki satu data menggunakan containsOneItem().
     */
    public function testContainsOneItem()
    {
        $singleItemCollection = collect([1]);
        $multiItemCollection = collect([1, 2, 3]);

        // Memastikan collection hanya memiliki satu data atau tidak.
        $this->assertTrue($singleItemCollection->containsOneItem());
        $this->assertFalse($multiItemCollection->containsOneItem());
    }
}
