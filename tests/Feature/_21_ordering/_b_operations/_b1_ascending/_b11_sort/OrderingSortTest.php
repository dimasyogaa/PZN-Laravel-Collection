<?php

namespace Tests\Feature\_21_ordering\_b_operations\_b1_ascending\_b11_sort;

use Tests\TestCase;

// php artisan test --filter OrderingSortTest
class OrderingSortTest extends TestCase
{
    /**
     * Test untuk mengurutkan secara ascending menggunakan sort().
     */
    public function testSort()
    {
        $collection = collect([3, 1, 4, 1, 5, 9, 2, 6]);

        // Memastikan collection diurutkan secara ascending.
        $sortedCollection = $collection->sort();
        $this->assertEqualsCanonicalizing([1, 1, 2, 3, 4, 5, 6, 9], $sortedCollection->toArray());
    }



}
