<?php

namespace Tests\Feature\_21_ordering\_b_operations\_b2_descending\_b21_sort_desc;

use Tests\TestCase;

// php artisan test --filter OrderingSortDescTest
class OrderingSortDescTest extends TestCase
{
    /**
     * Test untuk mengurutkan secara descending menggunakan sortDesc().
     */
    public function testSortDesc()
    {
        $collection = collect([3, 1, 4, 1, 5, 9, 2, 6]);

        // Memastikan collection diurutkan secara descending.
        $sortedCollection = $collection->sortDesc();
        $this->assertEqualsCanonicalizing([9, 6, 5, 4, 3, 2, 1, 1], $sortedCollection->toArray());
    }







}
